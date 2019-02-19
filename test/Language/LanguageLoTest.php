<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Script\ScriptLaoo;
use PHPUnit\Framework\TestCase as TestCase;

/**
 * Tests for the LanguageLo class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class LanguageLoTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $language = new LanguageLo();

        $this->assertEquals(new ScriptLaoo(), $language->defaultScript());
        $this->assertEquals(new PluralRule0(), $language->pluralRule());
        $this->assertSame('lo', $language->code());
    }
}
