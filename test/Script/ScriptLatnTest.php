<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptLatn class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptLatn
 */
class ScriptLatnTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptLatn();

        self::assertSame('Latn', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('215', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Latin', $script->unicodeName());
    }
}
