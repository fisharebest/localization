<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptShrd class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptShrdTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptShrd;

		$this->assertSame('Shrd', $script->code());
		$this->assertSame('319', $script->number());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('Sharada', $script->unicodeName());
	}
}
