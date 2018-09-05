<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Tests for the ScriptMong class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2018 Greg Roach
 * @license   GPLv3+
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
