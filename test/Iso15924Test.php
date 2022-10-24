<?php

namespace Fisharebest\LocalizationTest;

use Fisharebest\Localization\Script\ScriptInterface;
use PHPUnit\Framework\TestCase;

/**
 * Tests for ISO-15924
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @coversNothing
 */
class Iso15924Test extends TestCase
{
    /**
     * Test the scripts against their definitions in ISO15924
     *
     * @medium
     */
    public function testIso15924(): void
    {
        $iso15924 = file(__DIR__ . '/data/iso15924-2021-12-03.txt', FILE_IGNORE_NEW_LINES);
        $iso15924 = preg_grep('/^[A-Z][a-z]{3};/', $iso15924);
        $iso15924 = preg_grep('/Reserved for private use/', $iso15924, PREG_GREP_INVERT);

        foreach ($iso15924 as $data) {
            $fields = explode(';', $data);

            $class = '\\Fisharebest\\Localization\\Script\\Script' . $fields[0];
            self::assertTrue(class_exists($class), $data);

            /** @var ScriptInterface $script */
            $script = new $class();

            self::assertSame($fields[0], $script->code(), $data);
            self::assertSame($fields[1], $script->number(), $data);
            if ($fields[4] === '') {
                self::assertNull($script->unicodeName());
            } else {
                self::assertSame($fields[4], $script->unicodeName());
            }
        }
    }
}
