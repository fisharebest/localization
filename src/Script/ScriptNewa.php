<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptNewa - Representation of the Newa script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptNewa extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Newa';
    }

    public function number(): string
    {
        return '333';
    }

    public function unicodeName(): ?string
    {
        return 'Newa';
    }
}
