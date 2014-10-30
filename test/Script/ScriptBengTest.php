<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptBeng class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptBengTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptBeng;

		$this->assertSame('Beng', $script->code());
		$this->assertSame('325', $script->number());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('Bengali', $script->unicodeName());
	}
}
