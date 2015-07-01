<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptHluw class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptHluwTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptHluw;

		$this->assertSame('Hluw', $script->code());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame(array(), $script->numerals());
		$this->assertSame('Anatolian_Hieroglyphs', $script->unicodeName());
	}
}
