<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptTavt class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptTavtTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptTavt;

		$this->assertSame('Tavt', $script->code());
		$this->assertSame('359', $script->number());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('Tai_Viet', $script->unicodeName());
	}
}
