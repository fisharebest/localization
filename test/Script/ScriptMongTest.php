<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptMong class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptMongTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptMong;

		$this->assertSame('Mong', $script->code());
		$this->assertSame('145', $script->number());
		$this->assertSame('rtl', $script->direction());
		$this->assertSame('Mongolian', $script->unicodeName());
	}
}
