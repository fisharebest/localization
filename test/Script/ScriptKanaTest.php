<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptKana class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptKanaTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptKana;

		$this->assertSame('Kana', $script->code());
		$this->assertSame('411', $script->number());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('Katakana', $script->unicodeName());
	}
}
