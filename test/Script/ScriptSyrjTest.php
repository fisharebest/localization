<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptSyrj class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptSyrjTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptSyrj;

		$this->assertSame('Syrj', $script->code());
		$this->assertSame('137', $script->number());
		$this->assertSame('rtl', $script->direction());
		$this->assertNull($script->unicodeName());
	}
}
