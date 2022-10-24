<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptKthi - Representation of the Kaithi script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptKthi extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Kthi';
    }

    public function number(): string
    {
        return '317';
    }

    public function unicodeName(): ?string
    {
        return 'Kaithi';
    }
}
