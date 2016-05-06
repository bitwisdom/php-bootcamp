<?php

include_once 'vendor/autoload.php';

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Bitwisdom\Deliveries\PackageManager;

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

$package_manager = new PackageManager($entityManager);

foreach ($deliveries as $tracking_number => $delivery_date) {
    echo "Updating delivery date for: " . $tracking_number . "\n";
    $package_manager->updatePackage($tracking_number, $delivery_date);
}

echo "Updates finished.\n";

