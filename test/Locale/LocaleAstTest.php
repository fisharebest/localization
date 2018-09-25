<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageAst;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryEs;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Tests for the LocaleAst class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2018 Greg Roach
 * @license   GPLv3+
 */
class LocaleAstTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleAst();

        $this->assertEquals(new LanguageAst(), $locale->language());
        $this->assertEquals(new PluralRule1(), $locale->pluralRule());
        $this->assertEquals(new ScriptLatn(), $locale->script());
        $this->assertEquals(new TerritoryEs(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('ast_ES', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('asturianu', $locale->endonym());
        $this->assertSame('lang="ast"', $locale->htmlAttributes());
        $this->assertSame('ast', $locale->languageTag());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12.345.678,09', $locale->number(12345678.09));
        $this->assertSame('1.234,56%', $locale->percent(12.3456));
    }
}
