<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptShrd class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class ScriptShrdTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptShrd();

        $this->assertSame('Shrd', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('319', $script->number());
        $this->assertSame(array('𑇐', '𑇑', '𑇒', '𑇓', '𑇔', '𑇕', '𑇖', '𑇗', '𑇘', '𑇙'), $script->numerals());
        $this->assertSame('Sharada', $script->unicodeName());
    }
}
