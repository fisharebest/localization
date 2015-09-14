<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptHmng class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptHmngTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptHmng;

		$this->assertSame('Hmng', $script->code());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('450', $script->number());
		$this->assertSame(array(), $script->numerals());
		$this->assertSame('Pahawh_Hmong', $script->unicodeName());
	}
}
