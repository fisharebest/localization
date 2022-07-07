<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptCari class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptCariTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptCari();

        self::assertSame('Cari', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('201', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Carian', $script->unicodeName());
    }
}
