<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptDeva;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptDeva class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptDeva
 */
class ScriptDevaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptDeva();

        self::assertSame('Deva', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('315', $script->number());
        self::assertSame(array('०', '१', '२', '३', '४', '५', '६', '७', '८', '९'), $script->numerals());
        self::assertSame('Devanagari', $script->unicodeName());
    }
}
