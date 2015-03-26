<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptThaa class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptThaaTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptThaa;

		$this->assertSame('Thaa', $script->code());
		$this->assertSame('170', $script->number());
		$this->assertSame('rtl', $script->direction());
		$this->assertSame('Thaana', $script->unicodeName());
	}
}
