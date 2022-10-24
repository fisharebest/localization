<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptSind;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptSind class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptSind
 */
class ScriptSindTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptSind();

        self::assertSame('Sind', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('318', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Khudawadi', $script->unicodeName());
    }
}
