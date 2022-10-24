<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptHatr - Representation of the Hatran script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptHatr extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Hatr';
    }

    public function number(): string
    {
        return '127';
    }

    public function unicodeName(): ?string
    {
        return 'Hatran';
    }
}
