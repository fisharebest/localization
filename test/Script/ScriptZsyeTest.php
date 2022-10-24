<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptZsye;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptZsye class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptZsye
 */
class ScriptZsyeTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptZsye();

        self::assertSame('Zsye', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('993', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
