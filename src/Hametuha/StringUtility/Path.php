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
	 * This function is similar to `get_stylesheet_directory_uri()`
	 * or `plugin_dir_url()`, but works wherever the library is.
	 *
	 * @param string $path File path in document root.
	 * @return string URL.
	 */
	public function path_to_url( $path ) {
		if ( false !== strpos( $path, WP_PLUGIN_DIR ) ) {
			// This is in plugin dir.
			return str_replace( WP_PLUGIN_DIR, WP_PLUGIN_URL, $path );
		} elseif ( false !== strpos( $path, WPMU_PLUGIN_DIR ) ) {
			// This is in mu-plugins dir.
			return str_replace( WPMU_PLUGIN_DIR, WPMU_PLUGIN_URL, $path );
		} elseif ( false !== strpos( $path, WP_CONTENT_DIR ) ) {
			// This is in wp-content dir.
			return str_replace( WP_CONTENT_DIR, WP_CONTENT_URL, $path );
		} elseif ( false !== strpos( $path, ABSPATH ) ) {
			// Convert from ABSPATH.
			return str_replace( ABSPATH, home_url( '/' ), $path );
		} else {
			return $path;
		}
	}
}
