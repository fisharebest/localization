<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptHano class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptHanoTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptHano;

		$this->assertSame('Hano', $script->code());
		$this->assertSame('371', $script->number());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('Hanunoo', $script->unicodeName());
	}
}
