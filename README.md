# locationiq-php
Php Wrapper for https://locationiq.org

## Install
`composer require xolf/locationiq`

## Make first request
```php
$search = new \Xolf\LocationIQ\Search($apiKey);
$result = $search->get("Empire State Building");

// 40.7487727
$result[0]->lat;

// -73.9849336
$result[0]->lon;

// "node"
$result[0]->osm_type;

// "Empire State Building, 362, 5th Avenue, Diamond District, Manhattan, New York County, New York City, New York, 10035, United States of America"
$result[0]->osm_type;
```