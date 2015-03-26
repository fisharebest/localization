<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptHani class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptHaniTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptHani;

		$this->assertSame('Hani', $script->code());
		$this->assertSame('500', $script->number());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('Han', $script->unicodeName());
	}
}
