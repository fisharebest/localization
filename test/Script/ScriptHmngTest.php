<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptHmng class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptHmngTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptHmng();

        $this->assertSame('Hmng', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('450', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Pahawh_Hmong', $script->unicodeName());
    }
}
