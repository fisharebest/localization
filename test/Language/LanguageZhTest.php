<?php namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Script\ScriptHans;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LanguageZh class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LanguageZhTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$language = new LanguageZh;

		$this->assertEquals(new ScriptHans, $language->defaultScript());
		$this->assertEquals(new PluralRule0, $language->pluralRule());
		$this->assertSame('zh', $language->code());
	}
}
