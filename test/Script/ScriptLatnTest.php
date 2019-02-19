<?php

namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Tests for the ScriptLatn class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class ScriptLatnTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptLatn();

        $this->assertSame('Latn', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('215', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Latin', $script->unicodeName());
    }
}
