<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptEgyp - Representation of the Egyptian hieroglyphs script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptEgyp extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Egyp';
    }

    public function number(): string
    {
        return '050';
    }

    public function unicodeName(): ?string
    {
        return 'Egyptian_Hieroglyphs';
    }
}
