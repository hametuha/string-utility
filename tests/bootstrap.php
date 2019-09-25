<?php
// Include autoloader.
require_once dirname( __DIR__ ) . '/vendor/autoload.php';

require_once __DIR__ . '/libs/HametuhaNamingConventionImplementor.php';
require_once __DIR__ . '/libs/HametuhaPathImplementor.php';

if ( ! function_exists( 'home_url' ) ) {
	function home_url( $path = '' ) {
		return 'https://example.com/' . ltrim( $path, '/' );
	}
}
