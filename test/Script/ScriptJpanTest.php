<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptJpan;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptJpan class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptJpan
 */
class ScriptJpanTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptJpan();

        self::assertSame('Jpan', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('413', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
