<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Script\ScriptVaii;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Tests for the LanguageVai class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class LanguageVaiTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $language = new LanguageVai();

        $this->assertEquals(new ScriptVaii(), $language->defaultScript());
        $this->assertSame('vai', $language->code());
    }
}
