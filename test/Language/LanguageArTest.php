<?php namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule12;
use Fisharebest\Localization\Script\ScriptArab;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LanguageAr class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LanguageArTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$language = new LanguageAr;

		$this->assertEquals(new ScriptArab, $language->defaultScript());
		$this->assertEquals(new PluralRule12, $language->pluralRule());
		$this->assertSame('ar', $language->code());
	}
}
