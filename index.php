<?php
include 'vendor/autoload.php';

use Jemixs\APEXAPI;

const API_TOKEN = 'YOUR_API_TOKEN';

$client = new apexApi(API_TOKEN);

echo '<pre>',print_r($client->getPlayer('DiegosaursTTV')),'</pre>';
