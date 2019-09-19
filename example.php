<?php

use Herdl\PayRun\Client;

require('vendor/autoload.php');

$payRun = new Client('CONSUMER_KEY', 'PRIVATE_KEY', true);

print_r($payRun->healthCheck()->getHealthCheck());
