<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptSyrn class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptSyrnTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptSyrn;

		$this->assertSame('Syrn', $script->code());
		$this->assertSame('136', $script->number());
		$this->assertSame('rtl', $script->direction());
		$this->assertNull($script->unicodeName());
	}
}
