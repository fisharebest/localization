<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageSg;
use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryCf;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleSg class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class LocaleSgTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleSg();

        $this->assertEquals(new LanguageSg(), $locale->language());
        $this->assertEquals(new PluralRule0(), $locale->pluralRule());
        $this->assertEquals(new ScriptLatn(), $locale->script());
        $this->assertEquals(new TerritoryCf(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('sg_CF', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('Sängö', $locale->endonym());
        $this->assertSame('lang="sg"', $locale->htmlAttributes());
        $this->assertSame('sg', $locale->languageTag());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12.345.678,09', $locale->number(12345678.09));
        $this->assertSame('1.234,56%', $locale->percent(12.3456));
    }
}
