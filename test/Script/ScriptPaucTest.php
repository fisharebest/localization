<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptPauc class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class ScriptPaucTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptPauc();

        $this->assertSame('Pauc', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('263', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Pau_Cin_Hau', $script->unicodeName());
    }
}
