<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptJamo class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptJamoTest extends TestCase {
	/**
	 * Test the properties
	 */
	public function testProperties() {
		$script = new ScriptJamo;

		$this->assertSame('Jamo', $script->code());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('284', $script->number());
		$this->assertSame(array(), $script->numerals());
		$this->assertNull($script->unicodeName());
	}
}
