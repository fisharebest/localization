<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptTibt class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptTibtTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptTibt();

        self::assertSame('Tibt', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('330', $script->number());
        self::assertSame(array('༠', '༡', '༢', '༣', '༤', '༥', '༦', '༧', '༨', '༩'), $script->numerals());
        self::assertSame('Tibetan', $script->unicodeName());
    }
}
