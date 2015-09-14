<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptBuhd class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptBuhdTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptBuhd;

		$this->assertSame('Buhd', $script->code());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('372', $script->number());
		$this->assertSame(array(), $script->numerals());
		$this->assertSame('Buhid', $script->unicodeName());
	}
}
