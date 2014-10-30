<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptNkoo class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptNkooTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptNkoo;

		$this->assertSame('Nkoo', $script->code());
		$this->assertSame('165', $script->number());
		$this->assertSame('rtl', $script->direction());
		$this->assertSame('Nko', $script->unicodeName());
	}
}
