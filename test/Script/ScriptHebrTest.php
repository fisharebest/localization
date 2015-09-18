<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptArab class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptHebrTest extends TestCase {
	/**
	 * Test the properties
	 */
	public function testProperties() {
		$script = new ScriptHebr;

		$this->assertSame('Hebr', $script->code());
		$this->assertSame('rtl', $script->direction());
		$this->assertSame('125', $script->number());
		$this->assertSame(array(), $script->numerals());
		$this->assertSame('Hebrew', $script->unicodeName());
	}
}
