<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageLg;

/**
 * Class LocaleLg - Ganda
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleLg extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Luganda';
    }

    public function endonymSortable()
    {
        return 'LUGANDA';
    }

    public function language()
    {
        return new LanguageLg();
    }
}
