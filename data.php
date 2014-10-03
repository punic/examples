<?php
use \Punic\Data,
    \Punic\Language;

include 'vendor/autoload.php';

// This will print `Schweizer Hochdeutsch (Schweiz)` without specifying a second parameter for Language::getName
Data::setDefaultLocale('de_DE');
echo Language::getName('de_CH');

// This will print `alto tedesco svizzero (Svizzera)` because the value in the second parameter of getName isn't a valid locale
Data::setFallbackLocale('it_IT');
echo Language::getName('de_CH', 'et_INVALID');