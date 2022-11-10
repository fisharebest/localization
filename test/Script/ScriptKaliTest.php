<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptKali;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptKali class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptKali
 */
class ScriptKaliTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptKali();

        self::assertSame('Kali', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('357', $script->number());
        self::assertSame(['꤀', '꤁', '꤂', '꤃', '꤄', '꤅', '꤆', '꤇', '꤈', '꤉'], $script->numerals());
        self::assertSame('Kayah_Li', $script->unicodeName());
    }
}
