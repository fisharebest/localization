<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptGujr class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptGujrTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptGujr;

		$this->assertSame('Gujr', $script->code());
		$this->assertSame('320', $script->number());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('Gujarati', $script->unicodeName());
	}
}
