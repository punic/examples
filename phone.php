<?php
use \Punic\Phone;

include 'vendor/autoload.php';

// This will print an array containing '1', the country calling code for US
var_export(Phone::getPrefixesForTerritory('US'));

// This will print an array containing the country codes having '1' as country calling code (for instance US, CA)
var_export(Phone::getTerritoriesForPrefix('1'));
