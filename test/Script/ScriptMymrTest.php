<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptMymr;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptMymr class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptMymr
 */
class ScriptMymrTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptMymr();

        self::assertSame('Mymr', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('350', $script->number());
        self::assertSame(['၀', '၁', '၂', '၃', '၄', '၅', '၆', '၇', '၈', '၉'], $script->numerals());
        self::assertSame('Myanmar', $script->unicodeName());
    }
}
