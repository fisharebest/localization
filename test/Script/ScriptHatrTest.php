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
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptHatr;

		$this->assertSame('Hatr', $script->code());
		$this->assertSame('127', $script->number());
		$this->assertSame('rtl', $script->direction());
		$this->assertNull($script->unicodeName());
	}
}
