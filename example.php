<?php

use Herdl\PayRun\Client;

require('vendor/autoload.php');

$payRun = new Client('EXAMPLE_CONSUMER_KEY', 'EXAMPLE_CONSUMER_SECRET', true);

print_r($payRun->healthCheck()->getHealthCheck());
