<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptMedf;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptMedf class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptMedf
 */
class ScriptMedfTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptMedf();

        self::assertSame('Medf', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('265', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Medefaidrin', $script->unicodeName());
    }
}
