<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptLimb;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptLimb class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptLimb
 */
class ScriptLimbTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptLimb();

        self::assertSame('Limb', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('336', $script->number());
        self::assertSame(array('᥆', '᥇', '᥈', '᥉', '᥊', '᥋', '᥌', '᥍', '᥎', '᥏'), $script->numerals());
        self::assertSame('Limbu', $script->unicodeName());
    }
}
