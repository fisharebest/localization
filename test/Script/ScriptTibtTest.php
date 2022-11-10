<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptTibt;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptTibt class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptTibt
 */
class ScriptTibtTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptTibt();

        self::assertSame('Tibt', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('330', $script->number());
        self::assertSame(['༠', '༡', '༢', '༣', '༤', '༥', '༦', '༧', '༨', '༩'], $script->numerals());
        self::assertSame('Tibetan', $script->unicodeName());
    }
}
