<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptMarc;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptMarc class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptMarc
 */
class ScriptMarcTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptMarc();

        self::assertSame('Marc', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('332', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Marchen', $script->unicodeName());
    }
}
