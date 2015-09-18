<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptGran class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptGranTest extends TestCase {
	/**
	 * Test the properties
	 */
	public function testProperties() {
		$script = new ScriptGran;

		$this->assertSame('Gran', $script->code());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('343', $script->number());
		$this->assertSame(array(), $script->numerals());
		$this->assertSame('Grantha', $script->unicodeName());
	}
}
