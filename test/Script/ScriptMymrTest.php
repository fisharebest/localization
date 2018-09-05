<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Tests for the ScriptMymr class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2018 Greg Roach
 * @license   GPLv3+
 */
class ScriptMymrTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptMymr();

        $this->assertSame('Mymr', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('350', $script->number());
        $this->assertSame(array('၀', '၁', '၂', '၃', '၄', '၅', '၆', '၇', '၈', '၉'), $script->numerals());
        $this->assertSame('Myanmar', $script->unicodeName());
    }
}
