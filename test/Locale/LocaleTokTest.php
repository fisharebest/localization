<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageTok;
use Fisharebest\Localization\Locale\LocaleTok;
use Fisharebest\Localization\PluralRule\PluralRuleUnknown;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\Territory001;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleTok class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocaleTok
 */
class LocaleTokTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleTok();

        self::assertEquals(new LanguageTok(), $locale->language());
        self::assertEquals(new PluralRuleUnknown(), $locale->pluralRule());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new Territory001(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('tok_001', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('ltr', $locale->direction());
        self::assertSame('Toki Pona', $locale->endonym());
        self::assertSame('TOKI PONA', $locale->endonymSortable());
        self::assertSame('lang="tok"', $locale->htmlAttributes());
        self::assertSame('tok', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
