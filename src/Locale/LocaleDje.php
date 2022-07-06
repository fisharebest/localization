<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageDje;

/**
 * Class LocaleDje - Zarma
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleDje extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Zarmaciine';
    }

    public function endonymSortable()
    {
        return 'ZARMACIINE';
    }

    public function language()
    {
        return new LanguageDje();
    }

    public function numberSymbols()
    {
        return array(
            self::GROUP => self::NBSP,
        );
    }
}
