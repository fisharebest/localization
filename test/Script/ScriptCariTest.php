<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptCari;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptCari class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptCari
 */
class ScriptCariTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptCari();

        self::assertSame('Cari', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('201', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Carian', $script->unicodeName());
    }
}
