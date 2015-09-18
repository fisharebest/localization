<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptArab class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptArabTest extends TestCase {
	/**
	 * Test the properties
	 */
	public function testProperties() {
		$script = new ScriptArab;

		$this->assertSame('Arab', $script->code());
		$this->assertSame('rtl', $script->direction());
		$this->assertSame('160', $script->number());
		$this->assertSame(array('٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩'), $script->numerals());
		$this->assertSame('Arabic', $script->unicodeName());
	}
}
