<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptMlym class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptMlymTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptMlym;

		$this->assertSame('Mlym', $script->code());
		$this->assertSame('347', $script->number());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('Malayalam', $script->unicodeName());
	}
}
