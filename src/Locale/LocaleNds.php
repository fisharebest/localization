<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageNds;

/**
 * Class LocaleNds - Low German
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleNds extends LocaleDe
{
    public function endonym()
    {
        return 'Neddersass’sch';
    }

    public function endonymSortable()
    {
        return 'NEDDERSASS’SCH';
    }

    public function language()
    {
        return new LanguageNds();
    }
}
