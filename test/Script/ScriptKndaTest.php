<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptKnda class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class ScriptKndaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptKnda();

        $this->assertSame('Knda', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('345', $script->number());
        $this->assertSame(array('೦', '೧', '೨', '೩', '೪', '೫', '೬', '೭', '೮', '೯'), $script->numerals());
        $this->assertSame('Kannada', $script->unicodeName());
    }
}
