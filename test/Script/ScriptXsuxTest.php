<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptXsux;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptXsux class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptXsuxTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptXsux();

        self::assertSame('Xsux', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('020', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Cuneiform', $script->unicodeName());
    }
}
