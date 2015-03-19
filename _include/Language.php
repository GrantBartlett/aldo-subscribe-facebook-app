<?php

class Language {

	/**
	 * @return string
	 */
	public function getLanguage() {
		$language = filter_var( isset( $_GET['lang'] ) ? $_GET['lang'] : '', FILTER_SANITIZE_STRING );

		switch ( $language ) {

			case "ar" :
				return $language;

			case "en" :
				return $language;
				break;

			default :
				break;
		}
	}

}