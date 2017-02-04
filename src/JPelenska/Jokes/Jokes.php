<?php
namespace JPelenska\Jokes;

use GuzzleHttp\Client;

class Jokes {

	private $client;
	private $jokes;
	private $url;

	public function __construct(){
		$this->client = new Client();
		$url = 'http://v-ie.uek.krakow.pl/~s187772/list';
		$this->jokes = json_decode($this->client->request('GET', $url) -> getBody());		
	}

	public function randomJoke() {
		$listSize = count($this->jokes);
		return $this->jokes[rand(0, $listSize - 1)] -> content;
	}

	public function all() {
		$jokesTab = [];
		foreach($this->jokes as $joke) {
			array_push($jokesTab, $joke->content);
		}
		
		return $jokesTab;
	}

}