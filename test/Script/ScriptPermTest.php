<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptPerm;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptPerm class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptPerm
 */
class ScriptPermTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptPerm();

        self::assertSame('Perm', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('227', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Old_Permic', $script->unicodeName());
    }
}
