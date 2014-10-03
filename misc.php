<?php
use \Punic\Misc;

include 'vendor/autoload.php';

// This will print `One, Two`
echo Misc::joinUnits(array('One', 'Two'), '', 'en');

// This will print `Uno e due`
echo Misc::joinUnits(array('Uno', 'due'), '', 'it');

// This will print `Uno, due, e tre`
echo Misc::joinUnits(array('Uno', 'due', 'tre'), '', 'it');
