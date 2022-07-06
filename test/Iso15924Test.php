<?php

namespace Fisharebest\Localization;

use Fisharebest\Localization\Script\ScriptInterface;
use PHPUnit\Framework\TestCase;

/**
 * Tests for ISO-15924
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class Iso15924Test extends TestCase
{
    /**
     * Test the scripts against their definitions in ISO15924
     *
     * @medium
     */
    public function testIso15924()
    {
        $iso15924 = file(__DIR__ . '/data/iso15924-utf8-20180827.txt', FILE_IGNORE_NEW_LINES);
        $iso15924 = preg_grep('/^[A-Z][a-z]{3};/', $iso15924);
        $iso15924 = preg_grep('/Reserved for private use/', $iso15924, PREG_GREP_INVERT);

        foreach ($iso15924 as $data) {
            $fields = explode(';', $data);

            $class = __NAMESPACE__ . '\Script\Script' . $fields[0];
            $this->assertTrue(class_exists($class));

            /** @var ScriptInterface $script */
            $script = new $class();

            $this->assertSame($fields[0], $script->code());
            $this->assertSame($fields[1], $script->number());
            $this->assertSame($fields[4] ?: null, $script->unicodeName());
        }
    }
}
