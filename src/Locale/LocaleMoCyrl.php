<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Script\ScriptCyrl;

/**
 * Class LocaleIt - Italian
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleMoCyrl extends LocaleMo
{
    public function endonym()
    {
        return 'лимба молдовеняскэ';
    }

    public function endonymSortable()
    {
        return 'ЛИМБА МОЛДОВЕНЯСКЭ';
    }

    public function script()
    {
        return new ScriptCyrl();
    }
}
