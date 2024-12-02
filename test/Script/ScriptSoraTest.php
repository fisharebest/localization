<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptSora;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptSora class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2024 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptSora
 */
class ScriptSoraTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptSora();

        self::assertSame('Sora', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('398', $script->number());
        self::assertSame(['𑃰', '𑃱', '𑃲', '𑃳', '𑃴', '𑃵', '𑃶', '𑃷', '𑃸', '𑃹'], $script->numerals());
        self::assertSame('Sora_Sompeng', $script->unicodeName());
    }
}
