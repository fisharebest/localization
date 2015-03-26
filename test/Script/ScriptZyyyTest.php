<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptZyyy class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptZyyyTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptZyyy;

		$this->assertSame('Zyyy', $script->code());
		$this->assertSame('998', $script->number());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('Common', $script->unicodeName());
	}
}
