<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptHira class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptHiraTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptHira;

		$this->assertSame('Hira', $script->code());
		$this->assertSame('410', $script->number());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('Hiragana', $script->unicodeName());
	}
}
