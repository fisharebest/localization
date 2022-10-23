<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptLepc;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptLepc class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptLepcTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptLepc();

        self::assertSame('Lepc', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('335', $script->number());
        self::assertSame(array('᱀', '᱁', '᱂', '᱃', '᱄', '᱅', '᱆', '᱇', '᱈', '᱉'), $script->numerals());
        self::assertSame('Lepcha', $script->unicodeName());
    }
}
