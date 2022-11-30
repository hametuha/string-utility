<?php

use Hametuha\StringUtilityTest\NamingConventionImplementor;

/**
 * Test singleton pattern.
 */
class TestNameConvention extends \PHPUnit\Framework\TestCase {

	/**
	 * @var NamingConventionImplementor
	 */
	private $str = null;

	protected function setUp():void {
		$this->str = new NamingConventionImplementor();
	}


	/**
	 * Test snake case.
	 */
	public function testCamelToSnake() {
		$this->assertEquals( 'wp_unit_test', $this->str->camel_to_snake( 'WpUnitTest' ) );
		$this->assertEquals( 'wp_unit_test', $this->str->camel_to_snake( 'WP_UnitTest' ) );
		$this->assertEquals( 'wp_i18n_translate_format', $this->str->camel_to_snake( 'WpI18nTranslateFormat' ) );
		$this->assertEquals( 'no_prefix', $this->str->camel_to_snake( '_No_Prefix' ) );
		$this->assertEquals( 'no_hyphen', $this->str->camel_to_snake( '-NoHyphen' ) );
	}

	/**
	 * Test kebab case.
	 *
	 */
	public function testCamelToKebab() {
		$this->assertEquals( 'wp-unit-test', $this->str->camel_to_kebab( 'WpUnitTest' ) );
		$this->assertEquals( 'wp-unit-test', $this->str->camel_to_kebab( 'WP_UnitTest' ) );
		$this->assertEquals( 'wp-i18n-translate-format', $this->str->camel_to_kebab( 'WpI18nTranslateFormat' ) );
		$this->assertEquals( 'no-prefix', $this->str->camel_to_kebab( '_No_Prefix' ) );
		$this->assertEquals( 'no-hyphen', $this->str->camel_to_kebab( '-NoHyphen' ) );
	}

	/**
	 * Test snake case to camel
	 */
	public function testKebabToCamel() {
		$this->assertEquals( 'WpUnitTest', $this->str->kebab_to_camel( 'wp-unit-test', true ) );
		$this->assertEquals( 'wpUnitTest', $this->str->kebab_to_camel( 'wp-unit-test' ) );
	}

	/**
	 * Test snake case to camel
	 */
	public function testSnakeToCamel() {
		$this->assertEquals( 'WpUnitTest', $this->str->kebab_to_camel( 'wp_unit_test', true ) );
		$this->assertEquals( 'wpUnitTest', $this->str->kebab_to_camel( 'wp_unit_test' ) );
	}

	/**
	 * Test lower case group
	 */
	public function testSnakeToKebab() {
		$this->assertEquals( 'wp-unit-test', $this->str->snake_to_kebab( 'wp_unit_test' ) );
		$this->assertEquals( 'wp_unit_test', $this->str->kebab_to_snake( 'wp-unit-test' ) );
	}
}
