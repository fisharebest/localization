<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptTagb;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptTagb class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptTagb
 */
class ScriptTagbTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptTagb();

        self::assertSame('Tagb', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('373', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Tagbanwa', $script->unicodeName());
    }
}
