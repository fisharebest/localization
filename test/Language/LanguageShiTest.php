<?php namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRuleTachelhit;
use Fisharebest\Localization\Script\ScriptTfng;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LanguageShi class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LanguageShiTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$language = new LanguageShi;

		$this->assertEquals(new ScriptTfng, $language->defaultScript());
		$this->assertEquals(new PluralRuleTachelhit, $language->pluralRule());
		$this->assertSame('shi', $language->code());
	}
}
