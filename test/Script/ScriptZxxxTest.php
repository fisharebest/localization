<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptZxxx;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptZxxx class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptZxxx
 */
class ScriptZxxxTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptZxxx();

        self::assertSame('Zxxx', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('997', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
