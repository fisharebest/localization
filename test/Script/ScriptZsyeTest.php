<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptZsye class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptZsyeTest extends TestCase {
	/**
	 * Test the properties
	 */
	public function testProperties() {
		$script = new ScriptZsye;

		$this->assertSame('Zsye', $script->code());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('993', $script->number());
		$this->assertSame(array(), $script->numerals());
		$this->assertNull($script->unicodeName());
	}
}
