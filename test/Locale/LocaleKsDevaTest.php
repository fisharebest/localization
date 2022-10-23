<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageKs;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptDeva;
use Fisharebest\Localization\Territory\TerritoryIn;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleKsDeva class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleKsDevaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleKsDeva();

        self::assertEquals(new LanguageKs(), $locale->language());
        self::assertEquals(new PluralRule1(), $locale->pluralRule());
        self::assertEquals(new ScriptDeva(), $locale->script());
        self::assertEquals(new TerritoryIn(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('ks_IN@devanagari', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('०१२३४५६७८९', $locale->digits('0123456789'));
        self::assertSame('कॉशुर', $locale->endonym());
        self::assertSame('lang="ks-Deva" dir="rtl"', $locale->htmlAttributes());
        self::assertSame('ks-Deva', $locale->languageTag());
        self::assertSame('१٬२३٬४५٬६७८٫०९', $locale->number(12345678.09));
        self::assertSame('‎-‎१२३', $locale->number(-123));
        self::assertSame('१٬२३४٫५६٪', $locale->percent(12.3456));
    }
}
