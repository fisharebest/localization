<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptSinh class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptSinhTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptSinh;

		$this->assertSame('Sinh', $script->code());
		$this->assertSame('348', $script->number());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('Sinhala', $script->unicodeName());
	}
}
