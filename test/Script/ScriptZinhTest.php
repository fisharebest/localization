<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptZinh;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptZinh class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptZinhTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptZinh();

        self::assertSame('Zinh', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('994', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Inherited', $script->unicodeName());
    }
}
