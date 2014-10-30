<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptSund class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptSundTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptSund;

		$this->assertSame('Sund', $script->code());
		$this->assertSame('362', $script->number());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('Sundanese', $script->unicodeName());
	}
}
