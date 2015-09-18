<?php namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageKn;
use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Script\ScriptKnda;
use Fisharebest\Localization\Territory\TerritoryIn;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleKn class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleKnTest extends TestCase {
	/**
	 * Test the properties
	 */
	public function testProperties() {
		$locale = new LocaleKn;

		$this->assertEquals(new LanguageKn, $locale->language());
		$this->assertEquals(new PluralRule2, $locale->pluralRule());
		$this->assertEquals(new ScriptKnda, $locale->script());
		$this->assertEquals(new TerritoryIn, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertSame('kn_IN', $locale->code());
		$this->assertSame('unicode_ci', $locale->collation());
		$this->assertSame('೦೧೨೩೪೫೬೭೮೯', $locale->digits('0123456789'));
		$this->assertSame('ಕನ್ನಡ', $locale->endonym());
		$this->assertSame('lang="kn"', $locale->htmlAttributes());
		$this->assertSame('kn', $locale->languageTag());
		$this->assertSame('-೧೨೩', $locale->number(-123));
		$this->assertSame('೧೨,೩೪೫,೬೭೮.೦೯', $locale->number(12345678.09));
		$this->assertSame('೧,೨೩೪.೫೬%', $locale->percent(12.3456));
	}
}
