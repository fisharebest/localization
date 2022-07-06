<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageMt;
use Fisharebest\Localization\PluralRule\PluralRule13;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryMt;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleMt class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleMtTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleMt();

        $this->assertEquals(new LanguageMt(), $locale->language());
        $this->assertEquals(new PluralRule13(), $locale->pluralRule());
        $this->assertEquals(new ScriptLatn(), $locale->script());
        $this->assertEquals(new TerritoryMt(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('mt_MT', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('Malti', $locale->endonym());
        $this->assertSame('lang="mt"', $locale->htmlAttributes());
        $this->assertSame('mt', $locale->languageTag());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12,345,678.09', $locale->number(12345678.09));
        $this->assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
