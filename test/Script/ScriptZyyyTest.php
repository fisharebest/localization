<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptZyyy;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptZyyy class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptZyyy
 */
class ScriptZyyyTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptZyyy();

        self::assertSame('Zyyy', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('998', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Common', $script->unicodeName());
    }
}
