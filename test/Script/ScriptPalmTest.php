<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptPalm class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptPalmTest extends TestCase {
	/**
	 * Test the properties
	 */
	public function testProperties() {
		$script = new ScriptPalm;

		$this->assertSame('Palm', $script->code());
		$this->assertSame('rtl', $script->direction());
		$this->assertSame('126', $script->number());
		$this->assertSame(array(), $script->numerals());
		$this->assertSame('Palmyrene', $script->unicodeName());
	}
}
