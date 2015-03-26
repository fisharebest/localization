<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptAvst class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptAvstTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptAvst;

		$this->assertSame('Avst', $script->code());
		$this->assertSame('134', $script->number());
		$this->assertSame('rtl', $script->direction());
		$this->assertSame('Avestan', $script->unicodeName());
	}
}
