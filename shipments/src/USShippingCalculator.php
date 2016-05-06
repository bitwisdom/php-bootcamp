<?php

namespace Bitwisdom\Deliveries;

class USShippingCalculator {
    
    public function numberOfShippingDays($from, $to) {
        $shippingDays = [1, 2, 3, 4, 5]; # date format = N (1 = Monday, ...)
        $holidayDays = ['*-12-25', '*-01-01', '*-07-04']; # variable and fixed holidays
        $holidayDays = array_flip($holidayDays);

        $from = new \DateTime($from);
        $to = new \DateTime($to);
        $interval = new \DateInterval('P1D');
        $periods = new \DatePeriod($from, $interval, $to);

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
}
