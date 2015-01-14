<?php
use \Punic\Currency;

include 'vendor/autoload.php';

// This will print 'USD', the currency code for US Dollars
echo Currency::getCurrencyForTerritory('US'), "\n";

// This will print the name of USD in the current default Punic locale
echo Currency::getName('USD'), "\n";

// This will print the history of currencies used in Italy (from Italian Lira to Euro)
var_export(Currency::getCurrencyHistoryForTerritory('IT'));
