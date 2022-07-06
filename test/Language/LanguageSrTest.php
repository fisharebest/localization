<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule7;
use Fisharebest\Localization\Script\ScriptCyrl;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageSr class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LanguageSrTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $language = new LanguageSr();

        $this->assertEquals(new ScriptCyrl(), $language->defaultScript());
        $this->assertEquals(new PluralRule7(), $language->pluralRule());
        $this->assertSame('sr', $language->code());
    }
}
