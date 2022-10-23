<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptSund;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptSund class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptSundTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptSund();

        self::assertSame('Sund', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('362', $script->number());
        self::assertSame(array('᮰', '᮱', '᮲', '᮳', '᮴', '᮵', '᮶', '᮷', '᮸', '᮹'), $script->numerals());
        self::assertSame('Sundanese', $script->unicodeName());
    }
}
