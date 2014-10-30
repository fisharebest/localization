<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptAhom class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptAhomTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptAhom;

		$this->assertSame('Ahom', $script->code());
		$this->assertSame('338', $script->number());
		$this->assertSame('ltr', $script->direction());
		$this->assertNull($script->unicodeName());
	}
}
