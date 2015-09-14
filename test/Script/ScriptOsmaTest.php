<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptOsma class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptOsmaTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptOsma;

		$this->assertSame('Osma', $script->code());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('260', $script->number());
		$this->assertSame(array('𐒠', '𐒡', '𐒢', '𐒣', '𐒤', '𐒥', '𐒦', '𐒧', '𐒨', '𐒩'), $script->numerals());
		$this->assertSame('Osmanya', $script->unicodeName());
	}
}
