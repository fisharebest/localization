<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptZzzz;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptZzzz class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptZzzz
 */
class ScriptZzzzTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptZzzz();

        self::assertSame('Zzzz', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('999', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Unknown', $script->unicodeName());
    }
}
