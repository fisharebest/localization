<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptMahj class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptMahjTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptMahj;

		$this->assertSame('Mahj', $script->code());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('314', $script->number());
		$this->assertSame(array(), $script->numerals());
		$this->assertSame('Mahajani', $script->unicodeName());
	}
}
