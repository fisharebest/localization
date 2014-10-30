<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptItal class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptItalTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptItal;

		$this->assertSame('Ital', $script->code());
		$this->assertSame('210', $script->number());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('Old_Italic', $script->unicodeName());
	}
}
