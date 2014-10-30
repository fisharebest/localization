<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptKali class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptKaliTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptKali;

		$this->assertSame('Kali', $script->code());
		$this->assertSame('357', $script->number());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('Kayah_Li', $script->unicodeName());
	}
}
