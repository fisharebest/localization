<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptSyrc class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptSyrcTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptSyrc;

		$this->assertSame('Syrc', $script->code());
		$this->assertSame('135', $script->number());
		$this->assertSame('rtl', $script->direction());
		$this->assertSame('Syriac', $script->unicodeName());
	}
}
