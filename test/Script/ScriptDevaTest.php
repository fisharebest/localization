<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptDeva class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
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
