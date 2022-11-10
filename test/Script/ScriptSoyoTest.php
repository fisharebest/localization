<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptSoyo;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptSoyo class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptSoyo
 */
class ScriptSoyoTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptSoyo();

        self::assertSame('Soyo', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('329', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Soyombo', $script->unicodeName());
    }
}
