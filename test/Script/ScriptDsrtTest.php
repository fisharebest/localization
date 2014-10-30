<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptDsrt class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptDsrtTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptDsrt;

		$this->assertSame('Dsrt', $script->code());
		$this->assertSame('250', $script->number());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('Deseret', $script->unicodeName());
	}
}
