<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptBatk;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptBatk class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptBatk
 */
class ScriptBatkTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptBatk();

        self::assertSame('Batk', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('365', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Batak', $script->unicodeName());
    }
}
