<?php

/**
 * Test path.
 */
class PathTest extends \PHPUnit\Framework\TestCase {
	
	/**
	 * @var HametuhaPathImplementor
	 */
	private $path = null;
	
	protected function setUp() {
		define( 'ABSPATH', '/var/www/wordpress/' );
		define( 'WP_CONTENT_DIR', '/var/www/wordpress/contents' );
		define( 'WP_CONTENT_URL', 'https://example.com/contents' );
		define( 'WP_PLUGIN_DIR', '/var/www/wordpress/plugins' );
		define( 'WP_PLUGIN_URL', 'https://example.com/plugins' );
		define( 'WPMU_PLUGIN_DIR', '/var/www/wordpress/mu' );
		define( 'WPMU_PLUGIN_URL', 'https://example.com/mu' );
		$this->path = new HametuhaPathImplementor();
	}
	
	/**
	 * Test path converter.
	 */
	public function testPathConverter() {
		// ABSPATH
		$this->assertEquals( $this->path->path_to_url( '/var/www/wordpress/hoge' ), 'https://example.com/hoge', 'Root directory.' );
		// In plugins dir.
		$this->assertEquals( $this->path->path_to_url( '/var/www/wordpress/plugins/my-plugin' ), 'https://example.com/plugins/my-plugin', 'Plugin changed.' );
		// In mu-plugins dir.
		$this->assertEquals( $this->path->path_to_url( '/var/www/wordpress/mu/mu-plugin.jpg' ), 'https://example.com/mu/mu-plugin.jpg', 'MU plugins.' );
		// In themes dir.
		$this->assertEquals( $this->path->path_to_url( '/var/www/wordpress/contents/themes/style.css' ), 'https://example.com/contents/themes/style.css', 'For theme directory.' );
	}
}
