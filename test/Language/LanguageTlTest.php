<?php namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRuleTagalog;
use Fisharebest\Localization\Script\ScriptLatn;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LanguageTl class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LanguageTlTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$language = new LanguageTl;

		$this->assertEquals(new ScriptLatn, $language->defaultScript());
		$this->assertEquals(new PluralRuleTagalog, $language->pluralRule());
		$this->assertSame('tl', $language->code());
	}
}
