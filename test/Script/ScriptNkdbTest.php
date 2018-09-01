<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptNkdb class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2018 Greg Roach
 * @license   GPLv3+
 */
class ScriptNkdbTest extends TestCase {
	/**
	 * Test the properties
	 */
	public function testProperties() {
		$script = new ScriptNkdb;

		$this->assertSame('Nkdb', $script->code());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('085', $script->number());
		$this->assertSame(array(), $script->numerals());
        $this->assertNull($script->unicodeName());
	}
}
