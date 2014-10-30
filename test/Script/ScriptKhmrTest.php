<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptKhmr class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptKhmrTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptKhmr;

		$this->assertSame('Khmr', $script->code());
		$this->assertSame('355', $script->number());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('Khmer', $script->unicodeName());
	}
}
