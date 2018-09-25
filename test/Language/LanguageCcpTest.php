<?php namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Script\ScriptCakm;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Tests for the LanguageCcp class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2018 Greg Roach
 * @license   GPLv3+
 */
class LanguageCcpTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $language = new LanguageCcp();

        $this->assertEquals(new ScriptCakm(), $language->defaultScript());
        $this->assertEquals(new PluralRule0(), $language->pluralRule());
        $this->assertSame('ccp', $language->code());
    }
}