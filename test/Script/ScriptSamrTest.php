<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptSamr class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptSamrTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptSamr;

		$this->assertSame('Samr', $script->code());
		$this->assertSame('rtl', $script->direction());
		$this->assertSame('123', $script->number());
		$this->assertSame(array(), $script->numerals());
		$this->assertSame('Samaritan', $script->unicodeName());
	}
}
