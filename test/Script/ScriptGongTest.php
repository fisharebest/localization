<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptGong;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptGongTest class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptGongTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptGong();

        self::assertSame('Gong', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('312', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Gunjala_Gondi', $script->unicodeName());
    }
}
