<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptBamu;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptBamu class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptBamu
 */
class ScriptBamuTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptBamu();

        self::assertSame('Bamu', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('435', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Bamum', $script->unicodeName());
    }
}
