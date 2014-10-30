<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleOr class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleOrTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleOr;

		$this->assertEquals(new LanguageOr, $locale->language());
		$this->assertEquals(new ScriptOrya, $locale->script());
		$this->assertEquals(new TerritoryIn, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertsame('unicode_ci', $locale->collation());
		$this->assertSame('ଓଡ଼ିଆ', $locale->endonym());
		$this->assertSame('or_IN', $locale->code());
		$this->assertSame('or', $locale->languageTag());
		$this->assertSame('୦୧୨୩୪୫୬୭୮୯', $locale->convertDigits('0123456789'));
	}
}
