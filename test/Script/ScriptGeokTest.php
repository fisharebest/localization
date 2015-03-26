<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptGeok class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptGeokTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptGeok;

		$this->assertSame('Geok', $script->code());
		$this->assertSame('241', $script->number());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('Georgian', $script->unicodeName());
	}
}
