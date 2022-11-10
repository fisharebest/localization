<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptHmnp;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptHmnp class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptHmnp
 */
class ScriptHmnpTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptHmnp();

        self::assertSame('Hmnp', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('451', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Nyiakeng_Puachue_Hmong', $script->unicodeName());
    }
}
