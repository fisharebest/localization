<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptBrah class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptBrahTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptBrah;

		$this->assertSame('Brah', $script->code());
		$this->assertSame('300', $script->number());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('Brahmi', $script->unicodeName());
	}
}
