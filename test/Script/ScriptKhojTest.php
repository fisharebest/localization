<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptKhoj class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptKhojTest extends TestCase {
	/**
	 * Test the properties
	 */
	public function testProperties() {
		$script = new ScriptKhoj;

		$this->assertSame('Khoj', $script->code());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('322', $script->number());
		$this->assertSame(array(), $script->numerals());
		$this->assertSame('Khojki', $script->unicodeName());
	}
}
