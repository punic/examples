<?php
use \Punic\Number;

include 'vendor/autoload.php';

// This will print `1.234,57`
echo Number::format(1234.567, 2, 'it');

// This will print `1,234.57`
echo Number::format(1234.567, 2, 'en');

// This will print 1234.56
echo Number::unformat('1.234,56', 'it');

// This will print 1234.56
echo Number::unformat('1,234.56', 'en');
