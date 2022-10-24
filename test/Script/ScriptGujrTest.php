<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptGujr;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptGujr class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptGujr
 */
class ScriptGujrTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptGujr();

        self::assertSame('Gujr', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('320', $script->number());
        self::assertSame(array('૦', '૧', '૨', '૩', '૪', '૫', '૬', '૭', '૮', '૯'), $script->numerals());
        self::assertSame('Gujarati', $script->unicodeName());
    }
}
