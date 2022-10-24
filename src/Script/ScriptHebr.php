<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptHebr - Representation of the Hebrew script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptHebr extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Hebr';
    }

    public function number(): string
    {
        return '125';
    }

    public function unicodeName(): ?string
    {
        return 'Hebrew';
    }
}
