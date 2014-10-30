<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptSylo class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptSyloTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptSylo;

		$this->assertSame('Sylo', $script->code());
		$this->assertSame('316', $script->number());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('Syloti_Nagri', $script->unicodeName());
	}
}
