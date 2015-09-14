<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptTale class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptTaleTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptTale;

		$this->assertSame('Tale', $script->code());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('353', $script->number());
		$this->assertSame(array(), $script->numerals());
		$this->assertSame('Tai_Le', $script->unicodeName());
	}
}
