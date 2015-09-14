<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptArmi class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptArmiTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptArmi;

		$this->assertSame('Armi', $script->code());
		$this->assertSame('rtl', $script->direction());
		$this->assertSame('124', $script->number());
		$this->assertSame(array(), $script->numerals());
		$this->assertSame('Imperial_Aramaic', $script->unicodeName());
	}
}
