<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptOgam class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptOgamTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptOgam;

		$this->assertSame('Ogam', $script->code());
		$this->assertSame('212', $script->number());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('Ogham', $script->unicodeName());
	}
}
