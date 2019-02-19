<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Script\ScriptJava;
use PHPUnit\Framework\TestCase as TestCase;

/**
 * Tests for the LanguageKo class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class LanguageJvTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $language = new LanguageJv();

        $this->assertEquals(new ScriptJava(), $language->defaultScript());
        $this->assertEquals(new PluralRule0(), $language->pluralRule());
        $this->assertSame('jv', $language->code());
    }
}
