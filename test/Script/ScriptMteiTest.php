<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptMtei class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class ScriptMteiTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptMtei();

        $this->assertSame('Mtei', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('337', $script->number());
        $this->assertSame(array('꯰', '꯱', '꯲', '꯳', '꯴', '꯵', '꯶', '꯷', '꯸', '꯹'), $script->numerals());
        $this->assertSame('Meetei_Mayek', $script->unicodeName());
    }
}
