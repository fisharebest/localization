<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptXpeo class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptXpeoTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptXpeo();

        self::assertSame('Xpeo', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('030', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Old_Persian', $script->unicodeName());
    }
}
