<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptShaw class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptShawTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptShaw;

		$this->assertSame('Shaw', $script->code());
		$this->assertSame('281', $script->number());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('Shavian', $script->unicodeName());
	}
}
