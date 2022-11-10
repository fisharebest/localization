<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptCprt;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptCprt class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptCprt
 */
class ScriptCprtTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptCprt();

        self::assertSame('Cprt', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('403', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Cypriot', $script->unicodeName());
    }
}
