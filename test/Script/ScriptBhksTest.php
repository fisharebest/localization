<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptBhks class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptBhksTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptBhks;

		$this->assertSame('Bhks', $script->code());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('334', $script->number());
		$this->assertSame(array(), $script->numerals());
		$this->assertNull($script->unicodeName());
	}
}
