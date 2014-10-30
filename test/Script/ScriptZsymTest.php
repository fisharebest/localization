<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptZsym class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptZsymTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptZsym;

		$this->assertSame('Zsym', $script->code());
		$this->assertSame('996', $script->number());
		$this->assertSame('ltr', $script->direction());
		$this->assertNull($script->unicodeName());
	}
}
