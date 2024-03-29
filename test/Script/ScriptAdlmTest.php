<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptAdlm;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptAdlm class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptAdlm
 */
class ScriptAdlmTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptAdlm();

        self::assertSame('Adlm', $script->code());
        self::assertSame('rtl', $script->direction());
        self::assertSame('166', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Adlam', $script->unicodeName());
    }
}
