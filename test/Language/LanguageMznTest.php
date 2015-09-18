<?php namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule12;
use Fisharebest\Localization\Script\ScriptArab;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LanguageMzn class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LanguageMznTest extends TestCase {
	/**
	 * Test the properties
	 */
	public function testProperties() {
		$language = new LanguageMzn;

		$this->assertEquals(new ScriptArab, $language->defaultScript());
		$this->assertEquals(new PluralRule12, $language->pluralRule());
		$this->assertSame('mzn', $language->code());
	}
}
