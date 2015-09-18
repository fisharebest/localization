<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptMero class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptMeroTest extends TestCase {
	/**
	 * Test the properties
	 */
	public function testProperties() {
		$script = new ScriptMero;

		$this->assertSame('Mero', $script->code());
		$this->assertSame('rtl', $script->direction());
		$this->assertSame('100', $script->number());
		$this->assertSame(array(), $script->numerals());
		$this->assertSame('Meroitic_Hieroglyphs', $script->unicodeName());
	}
}
