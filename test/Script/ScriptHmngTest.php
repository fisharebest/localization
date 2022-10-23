<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptHmng;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptHmng class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptHmngTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptHmng();

        self::assertSame('Hmng', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('450', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Pahawh_Hmong', $script->unicodeName());
    }
}
