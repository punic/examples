<?php
use Punic\Misc;

include 'vendor/autoload.php';

// This will print '1 yd, 1 ft, 3 in'
echo Misc::joinUnits(array('1 yd', '1 ft', '3 in'), '', 'en');

// This will print '1 yd, 1 ft und 3 in'
echo Misc::joinUnits(array('1 yd', '1 ft', '3 in'), '', 'de');

// This will print 'One, two, and three'
echo Misc::joinAnd(array('One', 'two', 'three'), '', 'en');

// This will print 'Eins, Zwei und Drei'
echo Misc::joinAnd(array('Eins', 'Zwei', 'Drei'), '', 'de');

// This will print 'One, two, or three'
echo Misc::joinOr(array('One', 'two', 'three'), '', 'en');

// This will print 'Eins, Zwei oder Drei'
echo Misc::joinOr(array('Eins', 'Zwei', 'Drei'), '', 'de');
