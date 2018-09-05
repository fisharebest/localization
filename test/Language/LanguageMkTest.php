<?php namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule15;
use Fisharebest\Localization\Script\ScriptCyrl;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Tests for the LanguageMk class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2018 Greg Roach
 * @license   GPLv3+
 */
class LanguageMkTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $language = new LanguageMk();

        $this->assertEquals(new ScriptCyrl(), $language->defaultScript());
        $this->assertEquals(new PluralRule15(), $language->pluralRule());
        $this->assertSame('mk', $language->code());
    }
}
