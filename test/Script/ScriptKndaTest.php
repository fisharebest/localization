<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptKnda;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptKnda class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptKndaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptKnda();

        self::assertSame('Knda', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('345', $script->number());
        self::assertSame(array('೦', '೧', '೨', '೩', '೪', '೫', '೬', '೭', '೮', '೯'), $script->numerals());
        self::assertSame('Kannada', $script->unicodeName());
    }
}
