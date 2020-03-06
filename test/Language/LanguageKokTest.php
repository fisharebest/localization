<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Script\ScriptDeva;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageKok class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LanguageKokTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $language = new LanguageKok();

        $this->assertEquals(new ScriptDeva(), $language->defaultScript());
        $this->assertSame('kok', $language->code());
    }
}
