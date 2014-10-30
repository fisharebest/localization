<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptKnda class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptKndaTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptKnda;

		$this->assertSame('Knda', $script->code());
		$this->assertSame('345', $script->number());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('Kannada', $script->unicodeName());
	}
}
