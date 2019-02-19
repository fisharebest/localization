<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptArab;
use PHPUnit\Framework\TestCase as TestCase;

/**
 * Tests for the LanguagePs class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class LanguagePsTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $language = new LanguagePs();

        $this->assertEquals(new ScriptArab(), $language->defaultScript());
        $this->assertEquals(new PluralRule1(), $language->pluralRule());
        $this->assertSame('ps', $language->code());
    }
}
