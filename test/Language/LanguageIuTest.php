<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRuleOneTwoOther;
use Fisharebest\Localization\Script\ScriptCans;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageIu class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LanguageIuTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $language = new LanguageIu();

        $this->assertEquals(new ScriptCans(), $language->defaultScript());
        $this->assertEquals(new PluralRuleOneTwoOther(), $language->pluralRule());
        $this->assertSame('iu', $language->code());
    }
}
