<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguagePap;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\Territory029;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocalePap class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class LocalePapTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocalePap();

        $this->assertEquals(new LanguagePap(), $locale->language());
        $this->assertEquals(new PluralRule1(), $locale->pluralRule());
        $this->assertEquals(new ScriptLatn(), $locale->script());
        $this->assertEquals(new Territory029(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('pap_029', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('Papiamentu', $locale->endonym());
        $this->assertSame('lang="pap"', $locale->htmlAttributes());
        $this->assertSame('pap', $locale->languageTag());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12,345,678.09', $locale->number(12345678.09));
        $this->assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
