<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptLepc class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptLepcTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptLepc;

		$this->assertSame('Lepc', $script->code());
		$this->assertSame('335', $script->number());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('Lepcha', $script->unicodeName());
	}
}
