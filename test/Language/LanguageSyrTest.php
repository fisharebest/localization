<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptSyrc;
use PHPUnit\Framework\TestCase as TestCase;

/**
 * Tests for the LanguageSyr class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class LanguageSyrTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $language = new LanguageSyr();

        $this->assertEquals(new ScriptSyrc(), $language->defaultScript());
        $this->assertEquals(new PluralRule1(), $language->pluralRule());
        $this->assertSame('syr', $language->code());
    }
}
