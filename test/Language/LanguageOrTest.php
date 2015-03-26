<?php namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptOrya;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LanguageOr class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LanguageOrTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$language = new LanguageOr;

		$this->assertEquals(new ScriptOrya, $language->defaultScript());
		$this->assertEquals(new PluralRule1, $language->pluralRule());
		$this->assertSame('or', $language->code());
	}
}
