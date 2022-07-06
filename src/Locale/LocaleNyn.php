<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageNyn;

/**
 * Class LocaleNyn - Nyankole
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleNyn extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Runyankore';
    }

    public function endonymSortable()
    {
        return 'RUNYANKORE';
    }

    public function language()
    {
        return new LanguageNyn();
    }
}
