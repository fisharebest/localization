<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptBopo;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptBopo class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptBopo
 */
class ScriptBopoTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptBopo();

        self::assertSame('Bopo', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('285', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Bopomofo', $script->unicodeName());
    }
}
