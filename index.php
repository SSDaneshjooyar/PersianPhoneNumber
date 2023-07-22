<?php

require './vendor/autoload.php';
require './app/PersianPhoneNumber.php';


use App\PersianPhoneNumber\PersianPhoneNumber;


$persianPhoneNumber = new PersianPhoneNumber();

var_dump($persianPhoneNumber->validate("+9891010010201"));