<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptMong class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptMongTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptMong();

        $this->assertSame('Mong', $script->code());
        $this->assertSame('rtl', $script->direction());
        $this->assertSame('145', $script->number());
        $this->assertSame(array('᠐', '᠑', '᠒', '᠓', '᠔', '᠕', '᠖', '᠗', '᠘', '᠙'), $script->numerals());
        $this->assertSame('Mongolian', $script->unicodeName());
    }
}
