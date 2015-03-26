<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptMroo class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptMrooTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptMroo;

		$this->assertSame('Mroo', $script->code());
		$this->assertSame('199', $script->number());
		$this->assertSame('rtl', $script->direction());
		$this->assertNull($script->unicodeName());
	}
}
