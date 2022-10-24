<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptGlag - Representation of the Glagolitic script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptGlag extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Glag';
    }

    public function number(): string
    {
        return '225';
    }

    public function unicodeName(): ?string
    {
        return 'Glagolitic';
    }
}
