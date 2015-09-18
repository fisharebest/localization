<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptAghb class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptAghbTest extends TestCase {
	/**
	 * Test the properties
	 */
	public function testProperties() {
		$script = new ScriptAghb;

		$this->assertSame('Aghb', $script->code());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('239', $script->number());
		$this->assertSame(array(), $script->numerals());
		$this->assertSame('Caucasian_Albanian', $script->unicodeName());
	}
}
