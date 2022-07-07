<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptMong class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptMongTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptMong();

        self::assertSame('Mong', $script->code());
        self::assertSame('rtl', $script->direction());
        self::assertSame('145', $script->number());
        self::assertSame(array('᠐', '᠑', '᠒', '᠓', '᠔', '᠕', '᠖', '᠗', '᠘', '᠙'), $script->numerals());
        self::assertSame('Mongolian', $script->unicodeName());
    }
}
