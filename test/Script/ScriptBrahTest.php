<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase as TestCase;

/**
 * Tests for the ScriptBrah class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class ScriptBrahTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptBrah();

        $this->assertSame('Brah', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('300', $script->number());
        $this->assertSame(array('𑁦', '𑁧', '𑁨', '𑁩', '𑁪', '𑁫', '𑁬', '𑁭', '𑁮', '𑁯'), $script->numerals());
        $this->assertSame('Brahmi', $script->unicodeName());
    }
}
