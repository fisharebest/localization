<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Script\ScriptKore;
use PHPUnit\Framework\TestCase as TestCase;

/**
 * Tests for the LanguageKo class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class LanguageKoTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $language = new LanguageKo();

        $this->assertEquals(new ScriptKore(), $language->defaultScript());
        $this->assertEquals(new PluralRule0(), $language->pluralRule());
        $this->assertSame('ko', $language->code());
    }
}
