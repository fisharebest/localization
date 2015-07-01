<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptSgnw class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptSgnwTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptSgnw;

		$this->assertSame('Sgnw', $script->code());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('095', $script->number());
		$this->assertSame(array(), $script->numerals());
		$this->assertSame('SignWriting', $script->unicodeName());
	}
}
