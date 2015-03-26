<?php namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Script\ScriptVaii;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LanguageVai class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LanguageVaiTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$language = new LanguageVai;

		$this->assertEquals(new ScriptVaii, $language->defaultScript());
		$this->assertSame('vai', $language->code());
	}
}
