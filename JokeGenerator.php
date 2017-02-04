<?php

require_once __DIR__.'/vendor/autoload.php';

use JPelenska\Jokes\Jokes;
use GuzzleHttp\Client;

$jokeApi = new Jokes();
$randomJoke = $jokeApi->randomJoke();

echo "Random joke:\n" . $randomJoke . "\n\n";

$i = 1;

echo "All jokes:\n";
foreach($jokeApi->all() as $joke) {
		echo $i . ". " . $joke . "\n";
		$i++;
};