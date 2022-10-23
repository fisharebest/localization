<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptMahj;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptMahj class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptMahjTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptMahj();

        self::assertSame('Mahj', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('314', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Mahajani', $script->unicodeName());
    }
}
