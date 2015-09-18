<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptXsux class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptXsuxTest extends TestCase {
	/**
	 * Test the properties
	 */
	public function testProperties() {
		$script = new ScriptXsux;

		$this->assertSame('Xsux', $script->code());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('020', $script->number());
		$this->assertSame(array(), $script->numerals());
		$this->assertSame('Cuneiform', $script->unicodeName());
	}
}
