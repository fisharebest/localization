<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptOrya;
use PHPUnit\Framework\TestCase as TestCase;

/**
 * Tests for the LanguageOr class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class LanguageOrTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $language = new LanguageOr();

        $this->assertEquals(new ScriptOrya(), $language->defaultScript());
        $this->assertEquals(new PluralRule1(), $language->pluralRule());
        $this->assertSame('or', $language->code());
    }
}
