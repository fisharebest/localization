<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptPelm - Representation of the Proto-Elamite script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptPelm extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Pelm';
    }

    public function number(): string
    {
        return '016';
    }
}
