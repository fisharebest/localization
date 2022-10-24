<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptUgar;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptUgar class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptUgar
 */
class ScriptUgarTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptUgar();

        self::assertSame('Ugar', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('040', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Ugaritic', $script->unicodeName());
    }
}
