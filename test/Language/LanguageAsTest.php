<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Script\ScriptBeng;
use PHPUnit\Framework\TestCase as TestCase;

/**
 * Tests for the LanguageAs class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class LanguageAsTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $language = new LanguageAs();

        $this->assertEquals(new ScriptBeng(), $language->defaultScript());
        $this->assertEquals(new PluralRule2(), $language->pluralRule());
        $this->assertSame('as', $language->code());
    }
}
