<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageXog;

/**
 * Class LocaleXog - Soga
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleXog extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Olusoga';
    }

    public function endonymSortable()
    {
        return 'OLUSOGA';
    }

    public function language()
    {
        return new LanguageXog();
    }
}
