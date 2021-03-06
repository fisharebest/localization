<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageKam;

/**
 * Class LocaleKam - Kamba
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleKam extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Kikamba';
    }

    public function endonymSortable()
    {
        return 'KIKAMBA';
    }

    public function language()
    {
        return new LanguageKam();
    }
}
