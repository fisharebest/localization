<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptHrkt class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptHrktTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptHrkt;

		$this->assertSame('Hrkt', $script->code());
		$this->assertSame('412', $script->number());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('Katakana_Or_Hiragana', $script->unicodeName());
	}
}
