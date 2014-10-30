<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptRjng class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptRjngTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptRjng;

		$this->assertSame('Rjng', $script->code());
		$this->assertSame('363', $script->number());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('Rejang', $script->unicodeName());
	}
}
