<?php
// Include autoloader.
require_once dirname( __DIR__ ) . '/vendor/autoload.php';

if ( ! function_exists( 'home_url' ) ) {
	function home_url( $path = '' ) {
		return 'https://example.com/' . ltrim( $path, '/' );
	}
}
