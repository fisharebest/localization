<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptEgyp class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptEgypTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptEgyp;

		$this->assertSame('Egyp', $script->code());
		$this->assertSame('050', $script->number());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('Egyptian_Hieroglyphs', $script->unicodeName());
	}
}
