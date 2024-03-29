<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptKhmr;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptKhmr class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptKhmr
 */
class ScriptKhmrTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptKhmr();

        self::assertSame('Khmr', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('355', $script->number());
        self::assertSame(array('០', '១', '២', '៣', '៤', '៥', '៦', '៧', '៨', '៩'), $script->numerals());
        self::assertSame('Khmer', $script->unicodeName());
    }
}
