<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptOrkh class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptOrkhTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptOrkh;

		$this->assertSame('Orkh', $script->code());
		$this->assertSame('175', $script->number());
		$this->assertSame('rtl', $script->direction());
		$this->assertSame('Old_Turkic', $script->unicodeName());
	}
}
