<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageMs;

/**
 * Class LocaleMs - Malay
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleMs extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Melayu';
    }

    public function endonymSortable()
    {
        return 'MELAYU';
    }

    public function language()
    {
        return new LanguageMs();
    }
}
