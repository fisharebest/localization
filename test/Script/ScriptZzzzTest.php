<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptZzzz class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptZzzzTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptZzzz;

		$this->assertSame('Zzzz', $script->code());
		$this->assertSame('999', $script->number());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('Unknown', $script->unicodeName());
	}
}
