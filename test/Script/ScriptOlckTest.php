<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptOlck class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptOlckTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptOlck();

        self::assertSame('Olck', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('261', $script->number());
        self::assertSame(array('᱐', '᱑', '᱒', '᱓', '᱔', '᱕', '᱖', '᱗', '᱘', '᱙'), $script->numerals());
        self::assertSame('Ol_Chiki', $script->unicodeName());
    }
}
