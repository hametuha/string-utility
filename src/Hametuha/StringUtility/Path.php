<?php

namespace Hametuha\StringUtility;


/**
 * Path utiltiy.
 *
 * @package string-utility
 */
trait Path {
	
	/**
	 * Convert local file path to URL.
	 *
	 * This function is similar to `get_styelsheet_directory_uri()`
	 * or `plugin_dir_url()`, but works wherever library is.
	 *
	 * @param string $path File path in document root.
	 * @return string URL.
	 */
	public function path_to_url( $path ) {
		if ( false !== strpos( $path, WP_CONTENT_DIR ) ) {
			return str_replace( WP_CONTENT_DIR, WP_CONTENT_URL, $path );
		} elseif ( false !== strpos( $path, ABSPATH ) ) {
			return str_replace( ABSPATH, home_url( '/' ), $path );
		} else {
			return $path;
		}
	}
	
}
