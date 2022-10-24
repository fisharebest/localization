<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptYiii;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptYiii class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptYiii
 */
class ScriptYiiiTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptYiii();

        self::assertSame('Yiii', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('460', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Yi', $script->unicodeName());
    }
}
