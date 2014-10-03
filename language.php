<?php
use \Punic\Language;

include 'vendor/autoload.php';

// This will print `Italian (Italy)`
echo Language::getName('it_IT', 'en_US');

// This will print `Schweizer Hochdeutsch (Schweiz)`
echo Language::getName('de_CH', 'de_DE');
