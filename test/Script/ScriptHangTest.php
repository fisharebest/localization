<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptHang class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptHangTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptHang;

		$this->assertSame('Hang', $script->code());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('286', $script->number());
		$this->assertSame(array(), $script->numerals());
		$this->assertSame('Hangul', $script->unicodeName());
	}
}
