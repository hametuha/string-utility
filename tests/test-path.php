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
		$this->path = new HametuhaPathImplementor();
	}
	
	
	/**
	 * Test path convertor
	 */
	public function testPathConverter() {
		$this->assertEquals( $this->path->path_to_url( '/var/www/wordpress/hoge' ), 'https://example.com/hoge' );
	}
}
