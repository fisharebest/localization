<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Script\ScriptBeng;
use PHPUnit\Framework\TestCase as TestCase;

/**
 * Tests for the LanguageBn class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class LanguageBnTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $language = new LanguageBn();

        $this->assertEquals(new ScriptBeng(), $language->defaultScript());
        $this->assertEquals(new PluralRule2(), $language->pluralRule());
        $this->assertSame('bn', $language->code());
    }
}
