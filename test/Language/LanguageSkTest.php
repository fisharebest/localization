<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule8;
use Fisharebest\Localization\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageSk class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LanguageSkTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $language = new LanguageSk();

        $this->assertEquals(new ScriptLatn(), $language->defaultScript());
        $this->assertEquals(new PluralRule8(), $language->pluralRule());
        $this->assertSame('sk', $language->code());
    }
}
