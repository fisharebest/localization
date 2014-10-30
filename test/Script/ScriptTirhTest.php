<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptTirh class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptTirhTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptTirh;

		$this->assertSame('Tirh', $script->code());
		$this->assertSame('326', $script->number());
		$this->assertSame('ltr', $script->direction());
		$this->assertNull($script->unicodeName());
	}
}
