<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule12;
use Fisharebest\Localization\Script\ScriptArab;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageMzn class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LanguageLrcTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $language = new LanguageLrc();

        $this->assertEquals(new ScriptArab(), $language->defaultScript());
        $this->assertEquals(new PluralRule12(), $language->pluralRule());
        $this->assertSame('lrc', $language->code());
    }
}
