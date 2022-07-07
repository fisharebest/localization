<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptMarc class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptMarcTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptMarc();

        self::assertSame('Marc', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('332', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Marchen', $script->unicodeName());
    }
}
