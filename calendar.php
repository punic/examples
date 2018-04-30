<?php
use Punic\Calendar;

include 'vendor/autoload.php';

$dt = Calendar::toDateTime('2010-03-07');

// This will output 'AD'
echo Calendar::getEraName(1);

// This will output 'Mar'
echo Calendar::getMonthName($dt, 'abbreviated');

// This will output 'marzo'
echo Calendar::getMonthName($dt, 'wide', 'it');

// This will output 'Monday'
echo Calendar::getWeekdayName(1);

// This will output '1st quarter'
echo Calendar::getQuarterName(1);

// This will output '7 März 2010'
echo Calendar::format($dt, 'd MMMM y', 'de');

// This will output 'domenica 7 marzo 2010'
echo Calendar::formatDate($dt, 'full', 'it');

// This will output '7/3/2010'
echo Calendar::formatDate($dt, '~yMd', 'da');

// This will output 'Mar 7 – 10, 2010'
$dt2 = Calendar::toDateTime('2010-03-10');
echo Calendar::formatInterval($dt, $dt2, 'yMMMd');
