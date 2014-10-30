<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptEgyd class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptEgydTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptEgyd;

		$this->assertSame('Egyd', $script->code());
		$this->assertSame('070', $script->number());
		$this->assertSame('ltr', $script->direction());
		$this->assertNull($script->unicodeName());
	}
}
