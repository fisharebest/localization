<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptThai class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptThaiTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptThai;

		$this->assertSame('Thai', $script->code());
		$this->assertSame('352', $script->number());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('Thai', $script->unicodeName());
	}
}
