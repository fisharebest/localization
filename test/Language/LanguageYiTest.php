<?php namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptHebr;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LanguageYi class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LanguageYiTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$language = new LanguageYi;

		$this->assertEquals(new ScriptHebr, $language->defaultScript());
		$this->assertEquals(new PluralRule1, $language->pluralRule());
		$this->assertSame('yi', $language->code());
	}
}
