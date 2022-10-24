<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptTirh;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptTirh class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptTirh
 */
class ScriptTirhTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptTirh();

        self::assertSame('Tirh', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('326', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Tirhuta', $script->unicodeName());
    }
}
