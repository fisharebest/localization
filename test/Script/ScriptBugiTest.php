<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptBugi class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptBugiTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptBugi;

		$this->assertSame('Bugi', $script->code());
		$this->assertSame('367', $script->number());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('Buginese', $script->unicodeName());
	}
}
