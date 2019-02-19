<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Script\ScriptLatn;
use PHPUnit\Framework\TestCase as TestCase;

/**
 * Tests for the LanguageAgq class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class LanguageAgqTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $language = new LanguageAgq();

        $this->assertEquals(new ScriptLatn(), $language->defaultScript());
        $this->assertSame('agq', $language->code());
    }
}
