<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptVisp class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptVispTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptVisp;

		$this->assertSame('Visp', $script->code());
		$this->assertSame('280', $script->number());
		$this->assertSame('ltr', $script->direction());
		$this->assertNull($script->unicodeName());
	}
}
