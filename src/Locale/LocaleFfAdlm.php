<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Script\ScriptAdlm;

/**
 * Class LocaleFfAdlm - Fulah
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleFfAdlm extends LocaleFf
{
    public function endonym()
    {
        return '𞤊𞤵𞤤𞤬𞤵𞤤𞤣𞤫';
    }

    public function endonymSortable()
    {
        return '𞤊𞤵𞤤𞤬𞤵𞤤𞤣𞤫';
    }

    public function script()
    {
        return new ScriptAdlm();
    }
}
