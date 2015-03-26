<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptMand class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptMandTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptMand;

		$this->assertSame('Mand', $script->code());
		$this->assertSame('140', $script->number());
		$this->assertSame('rtl', $script->direction());
		$this->assertSame('Mandaic', $script->unicodeName());
	}
}
