<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptGonm;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptGonmTest class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptGonmTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptGonm();

        self::assertSame('Gonm', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('313', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Masaram_Gondi', $script->unicodeName());
    }
}
