<?php namespace Fisharebest\Localization;

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
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptMero;

		$this->assertSame('Mero', $script->code());
		$this->assertSame('100', $script->number());
		$this->assertSame('rtl', $script->direction());
		$this->assertSame('Meroitic_Hieroglyphs', $script->unicodeName());
	}
}
