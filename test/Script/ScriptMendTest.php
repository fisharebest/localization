<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptMend class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptMendTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptMend;

		$this->assertSame('Mend', $script->code());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('438', $script->number());
		$this->assertSame(array(), $script->numerals());
		$this->assertSame('Mende_Kikakui', $script->unicodeName());
	}
}
