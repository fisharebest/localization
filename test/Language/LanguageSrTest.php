<?php namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule7;
use Fisharebest\Localization\Script\ScriptCyrl;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LanguageSr class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LanguageSrTest extends TestCase {
	/**
	 * Test the properties
	 */
	public function testProperties() {
		$language = new LanguageSr;

		$this->assertEquals(new ScriptCyrl, $language->defaultScript());
		$this->assertEquals(new PluralRule7, $language->pluralRule());
		$this->assertSame('sr', $language->code());
	}
}
