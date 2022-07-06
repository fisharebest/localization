<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptDeva class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptDevaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptDeva();

        $this->assertSame('Deva', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('315', $script->number());
        $this->assertSame(array('०', '१', '२', '३', '४', '५', '६', '७', '८', '९'), $script->numerals());
        $this->assertSame('Devanagari', $script->unicodeName());
    }
}
