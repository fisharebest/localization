<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageDav class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LanguageDavTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $language = new LanguageDav();

        $this->assertEquals(new ScriptLatn(), $language->defaultScript());
        $this->assertSame('dav', $language->code());
    }
}
