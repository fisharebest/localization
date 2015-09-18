<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptRjng class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptRjngTest extends TestCase {
	/**
	 * Test the properties
	 */
	public function testProperties() {
		$script = new ScriptRjng;

		$this->assertSame('Rjng', $script->code());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('363', $script->number());
		$this->assertSame(array(), $script->numerals());
		$this->assertSame('Rejang', $script->unicodeName());
	}
}
