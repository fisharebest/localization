<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptLaoo - Representation of the Lao script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptLaoo extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Laoo';
    }

    public function numerals(): array
    {
        return ['໐', '໑', '໒', '໓', '໔', '໕', '໖', '໗', '໘', '໙'];
    }

    public function number(): string
    {
        return '356';
    }

    public function unicodeName(): ?string
    {
        return 'Lao';
    }
}
