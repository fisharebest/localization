<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptKthi class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptKthiTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptKthi;

		$this->assertSame('Kthi', $script->code());
		$this->assertSame('317', $script->number());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('Kaithi', $script->unicodeName());
	}
}
