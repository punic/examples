<?php
use \Punic\Territory;

include 'vendor/autoload.php';

// This will output `United States`
echo Territory::getName('US', 'en');

// Prints a list of all countries, indexed by the territory code
$countries = Territory::getCountries();
print_r($countries);

// Prints a list of all continents
$continents = Territory::getContinents();
print_r($continents);

// Prints a list of all countries group by continents
$continentsAndCountries = Territory::getContinentsAndCountries();
print_r($continentsAndCountries);
