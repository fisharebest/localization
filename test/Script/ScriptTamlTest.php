<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptTaml class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptTamlTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptTaml;

		$this->assertSame('Taml', $script->code());
		$this->assertSame('346', $script->number());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('Tamil', $script->unicodeName());
	}
}
