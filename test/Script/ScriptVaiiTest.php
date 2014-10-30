<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptVaii class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptVaiiTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptVaii;

		$this->assertSame('Vaii', $script->code());
		$this->assertSame('470', $script->number());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('Vai', $script->unicodeName());
	}
}
