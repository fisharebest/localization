<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptPhnx class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptPhnxTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptPhnx;

		$this->assertSame('Phnx', $script->code());
		$this->assertSame('115', $script->number());
		$this->assertSame('rtl', $script->direction());
		$this->assertSame('Phoenician', $script->unicodeName());
	}
}
