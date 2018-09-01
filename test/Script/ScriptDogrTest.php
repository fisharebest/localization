<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptDogrTest class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2018 Greg Roach
 * @license   GPLv3+
 */
class ScriptDogrTest extends TestCase {
	/**
	 * Test the properties
	 */
	public function testProperties() {
		$script = new ScriptDogr;

		$this->assertSame('Dogr', $script->code());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('328', $script->number());
		$this->assertSame(array(), $script->numerals());
        $this->assertSame('Dogra', $script->unicodeName());
	}
}
