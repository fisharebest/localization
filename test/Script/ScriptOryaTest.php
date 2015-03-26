<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptOrya class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptOryaTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptOrya;

		$this->assertSame('Orya', $script->code());
		$this->assertSame('327', $script->number());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('Oriya', $script->unicodeName());
	}
}
