<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptMend - Representation of the Mende Kikakui script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptMend extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Mend';
    }

    public function number(): string
    {
        return '438';
    }

    public function unicodeName(): ?string
    {
        return 'Mende_Kikakui';
    }
}
