<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptKitl class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptKitlTest extends TestCase {
	/**
	 * Test the properties
	 */
	public function testProperties() {
		$script = new ScriptKitl;

		$this->assertSame('Kitl', $script->code());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('505', $script->number());
		$this->assertSame(array(), $script->numerals());
		$this->assertNull($script->unicodeName());
	}
}
