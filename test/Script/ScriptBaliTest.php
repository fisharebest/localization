<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptBali class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptBaliTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptBali;

		$this->assertSame('Bali', $script->code());
		$this->assertSame('360', $script->number());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('Balinese', $script->unicodeName());
	}
}
