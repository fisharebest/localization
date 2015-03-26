<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptMani class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptManiTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptMani;

		$this->assertSame('Mani', $script->code());
		$this->assertSame('139', $script->number());
		$this->assertSame('rtl', $script->direction());
		$this->assertNull($script->unicodeName());
	}
}
