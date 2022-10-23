<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptBrah;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptBrah class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptBrahTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptBrah();

        self::assertSame('Brah', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('300', $script->number());
        self::assertSame(array('𑁦', '𑁧', '𑁨', '𑁩', '𑁪', '𑁫', '𑁬', '𑁭', '𑁮', '𑁯'), $script->numerals());
        self::assertSame('Brahmi', $script->unicodeName());
    }
}
