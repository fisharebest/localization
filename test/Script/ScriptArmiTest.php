<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptArmi;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptArmi class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptArmi
 */
class ScriptArmiTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptArmi();

        self::assertSame('Armi', $script->code());
        self::assertSame('rtl', $script->direction());
        self::assertSame('124', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Imperial_Aramaic', $script->unicodeName());
    }
}
