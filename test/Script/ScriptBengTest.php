<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptBeng class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptBengTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptBeng;

		$this->assertSame('Beng', $script->code());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('325', $script->number());
		$this->assertSame(array('০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯'), $script->numerals());
		$this->assertSame('Bengali', $script->unicodeName());
	}
}
