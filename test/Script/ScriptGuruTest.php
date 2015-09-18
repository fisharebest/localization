<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptGujr class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptGuruTest extends TestCase {
	/**
	 * Test the properties
	 */
	public function testProperties() {
		$script = new ScriptGuru;

		$this->assertSame('Guru', $script->code());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('310', $script->number());
		$this->assertSame(array('੦', '੧', '੨', '੩', '੪', '੫', '੬', '੭', '੮', '੯'), $script->numerals());
		$this->assertSame('Gurmukhi', $script->unicodeName());
	}
}
