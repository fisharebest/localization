<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Script\ScriptGujr;
use PHPUnit\Framework\TestCase as TestCase;

/**
 * Tests for the LanguageGu class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class LanguageGuTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $language = new LanguageGu();

        $this->assertEquals(new ScriptGujr(), $language->defaultScript());
        $this->assertEquals(new PluralRule2(), $language->pluralRule());
        $this->assertSame('gu', $language->code());
    }
}
