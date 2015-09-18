<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptTibt class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptTibtTest extends TestCase {
	/**
	 * Test the properties
	 */
	public function testProperties() {
		$script = new ScriptTibt;

		$this->assertSame('Tibt', $script->code());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('330', $script->number());
		$this->assertSame(array('༠', '༡', '༢', '༣', '༤', '༥', '༦', '༧', '༨', '༩'), $script->numerals());
		$this->assertSame('Tibetan', $script->unicodeName());
	}
}
