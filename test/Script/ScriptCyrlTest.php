<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptCyrl;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptCyrl class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptCyrl
 */
class ScriptCyrlTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptCyrl();

        self::assertSame('Cyrl', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('220', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Cyrillic', $script->unicodeName());
    }
}
