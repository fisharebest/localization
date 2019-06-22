<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptDsrt class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class ScriptDsrtTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptDsrt();

        $this->assertSame('Dsrt', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('250', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Deseret', $script->unicodeName());
    }
}
