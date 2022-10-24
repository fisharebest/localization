<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptLydi;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptLydi class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptLydi
 */
class ScriptLydiTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptLydi();

        self::assertSame('Lydi', $script->code());
        self::assertSame('rtl', $script->direction());
        self::assertSame('116', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Lydian', $script->unicodeName());
    }
}
