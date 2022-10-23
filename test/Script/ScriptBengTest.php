<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptBeng;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptBeng class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptBengTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptBeng();

        self::assertSame('Beng', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('325', $script->number());
        self::assertSame(array('০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯'), $script->numerals());
        self::assertSame('Bengali', $script->unicodeName());
    }
}
