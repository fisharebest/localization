<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptYiii class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptYiiiTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptYiii;

		$this->assertSame('Yiii', $script->code());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('460', $script->number());
		$this->assertSame(array(), $script->numerals());
		$this->assertSame('Yi', $script->unicodeName());
	}
}
