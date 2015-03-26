<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptGeor class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptGeorTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptGeor;

		$this->assertSame('Geor', $script->code());
		$this->assertSame('240', $script->number());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('Georgian', $script->unicodeName());
	}
}
