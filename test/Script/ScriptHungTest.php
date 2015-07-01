<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptHung class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptHungTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptHung;

		$this->assertSame('Hung', $script->code());
		$this->assertSame('rtl', $script->direction());
		$this->assertSame('176', $script->number());
		$this->assertSame(array(), $script->numerals());
		$this->assertSame('Old_Hungarian', $script->unicodeName());
	}
}
