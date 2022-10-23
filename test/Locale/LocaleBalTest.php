<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageBal;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryPk;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleBal class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleBalTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleBal();

        self::assertEquals(new LanguageBal(), $locale->language());
        self::assertEquals(new PluralRule1(), $locale->pluralRule());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new TerritoryPk(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('bal_PK', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('Tok Pisin', $locale->endonym());
        self::assertSame('lang="bal"', $locale->htmlAttributes());
        self::assertSame('bal', $locale->languageTag());
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
