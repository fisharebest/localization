<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptSaur class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptSaurTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptSaur;

		$this->assertSame('Saur', $script->code());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('344', $script->number());
		$this->assertSame(array('꣐', '꣑', '꣒', '꣓', '꣔', '꣕', '꣖', '꣗', '꣘', '꣙'), $script->numerals());
		$this->assertSame('Saurashtra', $script->unicodeName());
	}
}
