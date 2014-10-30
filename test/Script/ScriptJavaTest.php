<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptJava class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptJavaTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptJava;

		$this->assertSame('Java', $script->code());
		$this->assertSame('361', $script->number());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('Javanese', $script->unicodeName());
	}
}
