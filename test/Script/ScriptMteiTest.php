<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptMtei class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptMteiTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptMtei;

		$this->assertSame('Mtei', $script->code());
		$this->assertSame('337', $script->number());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('Meetei_Mayek', $script->unicodeName());
	}
}
