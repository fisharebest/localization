<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRuleZeroOneOther;
use Fisharebest\Localization\Script\ScriptLatn;
use PHPUnit\Framework\TestCase as TestCase;

/**
 * Tests for the LanguageLag class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class LanguageLagTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $language = new LanguageLag();

        $this->assertEquals(new ScriptLatn(), $language->defaultScript());
        $this->assertEquals(new PluralRuleZeroOneOther(), $language->pluralRule());
        $this->assertSame('lag', $language->code());
    }
}
