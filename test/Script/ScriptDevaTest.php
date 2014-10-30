<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptDeva class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptDevaTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptDeva;

		$this->assertSame('Deva', $script->code());
		$this->assertSame('315', $script->number());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('Devanagari', $script->unicodeName());
	}
}
