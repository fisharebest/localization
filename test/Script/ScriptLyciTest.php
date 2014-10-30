<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptLyci class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptLyciTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptLyci;

		$this->assertSame('Lyci', $script->code());
		$this->assertSame('202', $script->number());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('Lycian', $script->unicodeName());
	}
}
