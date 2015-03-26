<?php namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptArab;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LanguageKs class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LanguageKsTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$language = new LanguageKs;

		$this->assertEquals(new ScriptArab, $language->defaultScript());
		$this->assertEquals(new PluralRule1, $language->pluralRule());
		$this->assertSame('ks', $language->code());
	}
}
