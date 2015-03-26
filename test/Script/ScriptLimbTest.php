<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptLimb class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptLimbTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptLimb;

		$this->assertSame('Limb', $script->code());
		$this->assertSame('336', $script->number());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('Limbu', $script->unicodeName());
	}
}
