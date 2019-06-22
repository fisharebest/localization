<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptGongTest class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class ScriptGongTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptGong();

        $this->assertSame('Gong', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('312', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Gunjala_Gondi', $script->unicodeName());
    }
}
