<?php
use Punic\Unit;

include 'vendor/autoload.php';

// This will print `2,01 ms`
echo Unit::format(2.0123, 'millisecond', 2, 'it');

// This will print `2,0 millisecondi`
echo Unit::format(2.0123, 'millisecond', 'long,1', 'it');

// This will print `2,0123 ms`
echo Unit::format(2.0123, 'millisecond', 'narrow', 'it');
