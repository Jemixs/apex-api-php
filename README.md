# apex-api-php
Apex legends api. PHP wrapper for apex.tracker.gg

# Requirements
* PHP >= 5.6

Installation
============

* run `composer require jemixs/apex-api-php`

Basic usage
============

```
use Jemixs\APEXAPI\apexApi;

const API_TOKEN = 'YOUR_API_TOKEN';

$client = new apexApi(API_TOKEN);
$player = $client->getPlayer('jEMIXSs');
```

Available methods
============

* getPlayer([string, required]playerName) - returns array of data about player
