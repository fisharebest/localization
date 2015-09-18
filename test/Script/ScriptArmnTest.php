<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptArmn class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptArmnTest extends TestCase {
	/**
	 * Test the properties
	 */
	public function testProperties() {
		$script = new ScriptArmn;

		$this->assertSame('Armn', $script->code());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('230', $script->number());
		$this->assertSame(array(), $script->numerals());
		$this->assertSame('Armenian', $script->unicodeName());
	}
}
