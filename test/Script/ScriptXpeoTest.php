<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptXpeo;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptXpeo class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptXpeo
 */
class ScriptXpeoTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptXpeo();

        self::assertSame('Xpeo', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('030', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Old_Persian', $script->unicodeName());
    }
}
