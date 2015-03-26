<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptBopo class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptBopoTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptBopo;

		$this->assertSame('Bopo', $script->code());
		$this->assertSame('285', $script->number());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('Bopomofo', $script->unicodeName());
	}
}
