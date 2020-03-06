<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Script\ScriptLatn;

/**
 * Class LocaleCeLatn - Chechen
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleCeLatn extends LocaleCe
{
    public function endonym()
    {
        return 'Chechen';
    }

    public function endonymSortable()
    {
        return 'CHECHEN';
    }

    public function script()
    {
        return new ScriptLatn();
    }
}
