<?php
use Punic\Plural;

include 'vendor/autoload.php';

// This will print 'one'
echo Plural::getRule(1, 'en');

// This will print 'other'
echo Plural::getRule(2, 'en');
