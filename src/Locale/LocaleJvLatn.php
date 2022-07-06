<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Script\ScriptLatn;

/**
 * Class LocaleJv - Javanese
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleJvLatn extends LocaleJv
{
    public function endonym()
    {
        return 'Basa Jawa';
    }

    public function endonymSortable()
    {
        return 'BASA JAWA';
    }

    public function script()
    {
        return new ScriptLatn();
    }
}
