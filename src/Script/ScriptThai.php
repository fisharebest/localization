<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptThai - Representation of the Thai script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptThai extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Thai';
    }

    public function numerals(): array
    {
        return array('๐', '๑', '๒', '๓', '๔', '๕', '๖', '๗', '๘', '๙');
    }

    public function number(): string
    {
        return '352';
    }

    public function unicodeName(): ?string
    {
        return 'Thai';
    }
}
