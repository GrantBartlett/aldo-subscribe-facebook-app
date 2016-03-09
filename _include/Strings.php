<?php

class Strings extends Language {

	private $strings = [];

	/**
	* Get String
	* @return array
	*/
	public function getStrings() {
		$strings = file_get_contents( "json/strings.json" );
		return json_decode($strings, true);
	}
}
