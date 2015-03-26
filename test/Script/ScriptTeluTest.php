<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptTelu class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptTeluTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptTelu;

		$this->assertSame('Telu', $script->code());
		$this->assertSame('340', $script->number());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('Telugu', $script->unicodeName());
	}
}
