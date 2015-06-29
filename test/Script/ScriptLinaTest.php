<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptLina class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptLinaTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptLina;

		$this->assertSame('Lina', $script->code());
		$this->assertSame('400', $script->number());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('Linear_A', $script->unicodeName());
	}
}
