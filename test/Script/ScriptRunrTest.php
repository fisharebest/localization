<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptRunr class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptRunrTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptRunr;

		$this->assertSame('Runr', $script->code());
		$this->assertSame('211', $script->number());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('Runic', $script->unicodeName());
	}
}
