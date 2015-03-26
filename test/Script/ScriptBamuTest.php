<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptBamu class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptBamuTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptBamu;

		$this->assertSame('Bamu', $script->code());
		$this->assertSame('435', $script->number());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('Bamum', $script->unicodeName());
	}
}
