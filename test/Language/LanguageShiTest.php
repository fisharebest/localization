<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRuleTachelhit;
use Fisharebest\Localization\Script\ScriptTfng;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageShi class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LanguageShiTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $language = new LanguageShi();

        $this->assertEquals(new ScriptTfng(), $language->defaultScript());
        $this->assertEquals(new PluralRuleTachelhit(), $language->pluralRule());
        $this->assertSame('shi', $language->code());
    }
}
