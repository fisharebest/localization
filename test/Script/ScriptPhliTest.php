<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptPhli class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptPhliTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptPhli;

		$this->assertSame('Phli', $script->code());
		$this->assertSame('131', $script->number());
		$this->assertSame('rtl', $script->direction());
		$this->assertSame('Inscriptional_Pahlavi', $script->unicodeName());
	}
}
