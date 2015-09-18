<?php namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Script\ScriptLatn;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LanguageNus class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LanguageNusTest extends TestCase {
	/**
	 * Test the properties
	 */
	public function testProperties() {
		$language = new LanguageNus;

		$this->assertEquals(new ScriptLatn, $language->defaultScript());
		$this->assertSame('nus', $language->code());
	}
}
