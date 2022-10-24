<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptGlag;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptGlag class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptGlag
 */
class ScriptGlagTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptGlag();

        self::assertSame('Glag', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('225', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Glagolitic', $script->unicodeName());
    }
}
