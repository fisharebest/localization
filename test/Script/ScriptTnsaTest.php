<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptTnsa;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptTnsa class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptTnsa
 */
class ScriptTnsaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptTnsa();

        self::assertSame('Tnsa', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('275', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Tangsa', $script->unicodeName());
    }
}
