<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptTakr class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptTakrTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptTakr;

		$this->assertSame('Takr', $script->code());
		$this->assertSame('321', $script->number());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('Takri', $script->unicodeName());
	}
}
