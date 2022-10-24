<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptPauc;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptPauc class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptPauc
 */
class ScriptPaucTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptPauc();

        self::assertSame('Pauc', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('263', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Pau_Cin_Hau', $script->unicodeName());
    }
}
