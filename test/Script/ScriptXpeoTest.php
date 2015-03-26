<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptXpeo class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptXpeoTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptXpeo;

		$this->assertSame('Xpeo', $script->code());
		$this->assertSame('030', $script->number());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('Old_Persian', $script->unicodeName());
	}
}
