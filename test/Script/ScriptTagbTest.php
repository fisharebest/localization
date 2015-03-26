<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptTagb class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptTagbTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptTagb;

		$this->assertSame('Tagb', $script->code());
		$this->assertSame('373', $script->number());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('Tagbanwa', $script->unicodeName());
	}
}
