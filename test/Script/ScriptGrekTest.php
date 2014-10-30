<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptGrek class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptGrekTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptGrek;

		$this->assertSame('Grek', $script->code());
		$this->assertSame('200', $script->number());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('Greek', $script->unicodeName());
	}
}
