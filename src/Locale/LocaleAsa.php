<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageAsa;

/**
 * Class LocaleAsa - Asu
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleAsa extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Kipare';
    }

    public function endonymSortable()
    {
        return 'KIPARE';
    }

    public function language()
    {
        return new LanguageAsa();
    }
}
