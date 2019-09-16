<?php

use Herdl\PayRun\Client;
use Herdl\PayRun\Models\EmployerModel;

require('vendor/autoload.php');

$payRun = new Client('sQzgBcZkiku8ZlMLx75mEQ', 'qE299Jo2fEGKoDSbJSLQZ2QlTDql5kOPXZzRKhtKUQ', true);

$employer = new EmployerModel();

$employer->setEffectiveDate(time());

print_r($payRun->employer()->postEmployer($employer->format()));
