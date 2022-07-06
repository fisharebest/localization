<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Script\ScriptLatn;

/**
 * Class LocaleShiLatn
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleShiLatn extends LocaleShi
{
    public function endonym()
    {
        return 'tamazight';
    }

    public function endonymSortable()
    {
        return 'TAMAZIGHT';
    }

    public function script()
    {
        return new ScriptLatn();
    }
}
