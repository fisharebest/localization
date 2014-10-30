<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptCakm class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptCakmTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptCakm;

		$this->assertSame('Cakm', $script->code());
		$this->assertSame('349', $script->number());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('Chakma', $script->unicodeName());
	}
}
