<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptGoth class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptGothTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptGoth;

		$this->assertSame('Goth', $script->code());
		$this->assertSame('206', $script->number());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('Gothic', $script->unicodeName());
	}
}
