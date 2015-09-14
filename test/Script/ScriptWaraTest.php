<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptWara class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptWaraTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptWara;

		$this->assertSame('Wara', $script->code());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('262', $script->number());
		$this->assertSame(array(), $script->numerals());
		$this->assertSame('Warang_Citi', $script->unicodeName());
	}
}
