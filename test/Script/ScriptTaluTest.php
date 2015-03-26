<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptTalu class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptTaluTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptTalu;

		$this->assertSame('Talu', $script->code());
		$this->assertSame('354', $script->number());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('New_Tai_Lue', $script->unicodeName());
	}
}
