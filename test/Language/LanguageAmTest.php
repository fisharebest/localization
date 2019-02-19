<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Script\ScriptEthi;
use PHPUnit\Framework\TestCase as TestCase;

/**
 * Tests for the LanguageAm class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class LanguageAmTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $language = new LanguageAm();

        $this->assertEquals(new ScriptEthi(), $language->defaultScript());
        $this->assertEquals(new PluralRule2(), $language->pluralRule());
        $this->assertSame('am', $language->code());
    }
}
