<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptMymr class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptMymrTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptMymr;

		$this->assertSame('Mymr', $script->code());
		$this->assertSame('350', $script->number());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('Myanmar', $script->unicodeName());
	}
}
