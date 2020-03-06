<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageOm;

/**
 * Class LocaleOm - Oromo
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleOm extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Oromoo';
    }

    public function endonymSortable()
    {
        return 'OROMOO';
    }

    public function language()
    {
        return new LanguageOm();
    }
}
