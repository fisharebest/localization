<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptShaw class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptShawTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptShaw();

        self::assertSame('Shaw', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('281', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Shavian', $script->unicodeName());
    }
}
