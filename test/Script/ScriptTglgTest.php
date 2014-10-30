<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptTglg class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptTglgTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptTglg;

		$this->assertSame('Tglg', $script->code());
		$this->assertSame('370', $script->number());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('Tagalog', $script->unicodeName());
	}
}
