<?php

namespace Hametuha\StringUtility;


/**
 * Utility functions for naming conventions.
 *
 * @package string-utilty
 */
trait NamingConventions {

	/**
	 * Make hyphenated string to camel case
	 *
	 * @param string $string
	 * @param bool $upper_case_first Returns Uppercase first letter if true. Default false.
	 *
	 * @return string
	 */
	public function kebab_to_camel( $string, $upper_case_first = false ) {
		$str = preg_replace_callback( '/-(.)/u', function ( $match ) {
			return strtoupper( $match[1] );
		}, strtolower( $this->snake_to_kebab( $string ) ) );
		if ( $upper_case_first ) {
			$str = ucfirst( $str );
		}
		return $str;
	}

	/**
	 *
	 *
	 * @param string $string           String to convert.
	 * @param bool   $upper_case_first Returns Uppercase first letter if true. Default false.
	 *
	 * @return string
	 */
	public function snake_to_camel( $string, $upper_case_first = false ) {
		$kebab = $this->snake_to_kebab( $string );
		return $this->kebab_to_camel( $kebab, $upper_case_first );
	}

	/**
	 * Make camel case to hyphenated string
	 *
	 * @param string $string
	 *
	 * @return string
	 */
	public function camel_to_kebab( $string ) {
		return ltrim( $this->snake_to_kebab( strtolower( preg_replace_callback( '/(?<!^|[A-Z_\-])([A-Z]+)/u', function ( $match ) {
			return '-' . strtolower( $match[1] );
		}, (string) $string ) ) ), '-' );
	}

	/**
	 * Convert camel case to snake case.
	 *
	 * @param $string
	 *
	 * @return string
	 */
	public function camel_to_snake( $string ) {
		return str_replace( '-', '_', $this->camel_to_kebab( $string ) );
	}

	/**
	 * Convert snake case to kebab case.
	 *
	 * @param string $string
	 *
	 * @return string
	 */
	public function snake_to_kebab( $string ) {
		return str_replace( '_', '-', $string );
	}

	/**
	 * Convert kebab case to snake case.
	 *
	 * @param string $string
	 *
	 * @return string
	 */
	public function kebab_to_snake( $string ) {
		return str_replace( '-', '_', $string );
	}

	/**
	 * Make hyphenated string to camel case
	 *
	 * @deprecated
	 * @param string $string
	 * @param bool $upper_first Returns Uppercase first letter if true. Default false.
	 *
	 * @return string
	 */
	public function hyphen_to_camel( $string, $upper_first = false ) {
		return $this->kebab_to_camel( $string, $upper_first );
	}

	/**
	 * Make camel case to hyphenated string
	 *
	 * @deprecated
	 * @param string $string
	 *
	 * @return string
	 */
	public function camel_to_hyphen( $string ) {
		return $this->camel_to_kebab( $string );
	}
}
