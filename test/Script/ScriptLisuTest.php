<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptLisu class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptLisuTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptLisu;

		$this->assertSame('Lisu', $script->code());
		$this->assertSame('399', $script->number());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('Lisu', $script->unicodeName());
	}
}
