<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptHmnp - Representation of the Nyiakeng Puachue Hmong script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptHmnp extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Hmnp';
    }

    public function number(): string
    {
        return '451';
    }

    public function unicodeName(): ?string
    {
        return 'Nyiakeng_Puachue_Hmong';
    }
}
