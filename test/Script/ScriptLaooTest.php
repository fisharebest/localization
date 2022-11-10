<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptLaoo;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptLaoo class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptLaoo
 */
class ScriptLaooTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptLaoo();

        self::assertSame('Laoo', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('356', $script->number());
        self::assertSame(['໐', '໑', '໒', '໓', '໔', '໕', '໖', '໗', '໘', '໙'], $script->numerals());
        self::assertSame('Lao', $script->unicodeName());
    }
}
