<?php

include_once 'vendor/autoload.php';

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

if (count($argv) < 2) {
    echo "Missing required argument: Deliveries CSV file\n";
    die;
}

if (!file_exists($argv[1])) {
    echo "Deliveries CSV file not found: " . $argv[1] . "\n";
    die;
}

if (!file_exists('config/config.yml')) {
    echo "Config file not found.\n";
    die;
}

$yaml_parser = new Symfony\Component\Yaml\Parser();
$config = $yaml_parser->parse(file_get_contents('config/config.yml'));

$fh = fopen($argv[1], 'r');
$header = fgetcsv($fh);
$deliveries = [];
while($row = fgetcsv($fh)) {
    $deliveries[$row[0]] = $row[1];
}

$paths = [__DIR__ . "/src"];

// database configuration parameters
$dbParams = array(
    'driver'   => $config['db']['driver'],
    'user'     => $config['db']['username'],
    'password' => $config['db']['password'],
    'dbname'   => $config['db']['name'],
);
$entityManagerConfig = Setup::createAnnotationMetadataConfiguration($paths);
$entityManager = EntityManager::create($dbParams, $entityManagerConfig);

$package_repo = $entityManager->getRepository('\Bitwisdom\Deliveries\Package');

foreach ($deliveries as $tracking_number => $delivery_date) {
    echo "Updating delivery date for: " . $tracking_number . "\n";
    
    $package = $package_repo->findOneBy(['trackingNumber' => $tracking_number]);
    $ship_date = $package->getShipped();
    
    $number_of_shipping_days = number_of_shipping_days($ship_date->format('Y-m-d'), $delivery_date);
    
    $package->setDelivered(new DateTime($delivery_date));
    $package->setShippingDays($number_of_shipping_days);
    
    $entityManager->flush();
}

echo "Updates finished.\n";


function number_of_shipping_days($from, $to) {
    $shippingDays = [1, 2, 3, 4, 5]; # date format = N (1 = Monday, ...)
    $holidayDays = ['*-12-25', '*-01-01', '*-07-04']; # variable and fixed holidays
    $holidayDays = array_flip($holidayDays);

    $from = new DateTime($from);
    $to = new DateTime($to);
    $interval = new DateInterval('P1D');
    $periods = new DatePeriod($from, $interval, $to);

    $days = 0;
    foreach ($periods as $period) {
        if (!in_array($period->format('N'), $shippingDays)) {
            continue;
        }
        if (isset($holidayDays[$period->format('Y-m-d')])) {
            continue;
        }
        if (isset($holidayDays[$period->format('*-m-d')])) {
            continue;
        }
        $days++;
    }
    return $days;
}