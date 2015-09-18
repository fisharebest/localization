<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptHatr class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptHatrTest extends TestCase {
	/**
	 * Test the properties
	 */
	public function testProperties() {
		$script = new ScriptHatr;

		$this->assertSame('Hatr', $script->code());
		$this->assertSame('rtl', $script->direction());
		$this->assertSame('127', $script->number());
		$this->assertSame(array(), $script->numerals());
		$this->assertSame('Hatran', $script->unicodeName());
	}
}
