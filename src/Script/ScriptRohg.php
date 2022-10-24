<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptRohg - Representation of the Hanifi Rohingya script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptRohg extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Rohg';
    }

    public function number(): string
    {
        return '167';
    }

    public function unicodeName(): ?string
    {
        return 'Hanifi_Rohingya';
    }
}
