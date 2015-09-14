<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptMerc class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptMercTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptMerc;

		$this->assertSame('Merc', $script->code());
		$this->assertSame('rtl', $script->direction());
		$this->assertSame('101', $script->number());
		$this->assertSame(array(), $script->numerals());
		$this->assertSame('Meroitic_Cursive', $script->unicodeName());
	}
}
