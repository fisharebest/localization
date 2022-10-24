<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptPhnx - Representation of the Phoenician script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptPhnx extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Phnx';
    }

    public function number(): string
    {
        return '115';
    }

    public function unicodeName(): ?string
    {
        return 'Phoenician';
    }
}
