<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptLaoo class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptLaooTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptLaoo;

		$this->assertSame('Laoo', $script->code());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame(array('໐', '໑', '໒', '໓', '໔', '໕', '໖', '໗', '໘', '໙'), $script->numerals());
		$this->assertSame('Lao', $script->unicodeName());
	}
}
