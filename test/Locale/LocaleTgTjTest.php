<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageTg;
use Fisharebest\Localization\Locale\LocaleTgTj;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptCyrl;
use Fisharebest\Localization\Territory\TerritoryTj;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleTgTj class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleTgTjTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleTgTj();

        self::assertEquals(new LanguageTg(), $locale->language());
        self::assertEquals(new PluralRule1(), $locale->pluralRule());
        self::assertEquals(new ScriptCyrl(), $locale->script());
        self::assertEquals(new TerritoryTj(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('tg_TJ', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('тоҷикӣ', $locale->endonym());
        self::assertSame('lang="tg"', $locale->htmlAttributes());
        self::assertSame('tg', $locale->languageTag());
        self::assertSame('12 345 678,09', $locale->number(12345678.09));
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('1 234,56%', $locale->percent(12.3456));
    }
}
