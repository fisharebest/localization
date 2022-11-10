<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptLinb;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptLinb class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptLinb
 */
class ScriptLinbTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptLinb();

        self::assertSame('Linb', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('401', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Linear_B', $script->unicodeName());
    }
}
