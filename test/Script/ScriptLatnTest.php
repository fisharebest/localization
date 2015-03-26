<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptLatn class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptLatnTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptLatn;

		$this->assertSame('Latn', $script->code());
		$this->assertSame('215', $script->number());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('Latin', $script->unicodeName());
	}
}
