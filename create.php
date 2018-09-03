<?php
require 'vendor/autoload.php';

use Carbon\Carbon;
use Carbon\CarbonPeriod;

setlocale(LC_ALL, 'ja_JP.UTF-8');

$start = Carbon::now()->startOfMonth();
$end = Carbon::now()->endOfMonth();

$thisMonth = Carbon::now()->format('Y-m');
$lastMonth = Carbon::now()->subMonth()->format('[Y-m]');
$nextMonth = Carbon::now()->addMonth()->format('[Y-m]');

printf("%s\n",$thisMonth);
echo $lastMonth . $nextMonth . PHP_EOL;
$period = new CarbonPeriod($start, '1 day', $end);
foreach ($period as $date) {
    echo $date->formatLocalized('[%Y-%m-%d](%a) ');
    if ($date->isSunday()) {
        echo PHP_EOL;
    }
}
