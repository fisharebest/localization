<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptElba;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptElba class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptElbaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptElba();

        self::assertSame('Elba', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('226', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Elbasan', $script->unicodeName());
    }
}
