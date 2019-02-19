<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRuleWelsh;
use Fisharebest\Localization\Script\ScriptLatn;
use PHPUnit\Framework\TestCase as TestCase;

/**
 * Tests for the LanguageCy class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class LanguageCyTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $language = new LanguageCy();

        $this->assertEquals(new ScriptLatn(), $language->defaultScript());
        $this->assertEquals(new PluralRuleWelsh(), $language->pluralRule());
        $this->assertSame('cy', $language->code());
    }
}
