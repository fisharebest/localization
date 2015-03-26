<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptUgar class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptUgarTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptUgar;

		$this->assertSame('Ugar', $script->code());
		$this->assertSame('040', $script->number());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('Ugaritic', $script->unicodeName());
	}
}
