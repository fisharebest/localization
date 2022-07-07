<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptShrd class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptShrdTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptShrd();

        self::assertSame('Shrd', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('319', $script->number());
        self::assertSame(array('𑇐', '𑇑', '𑇒', '𑇓', '𑇔', '𑇕', '𑇖', '𑇗', '𑇘', '𑇙'), $script->numerals());
        self::assertSame('Sharada', $script->unicodeName());
    }
}
