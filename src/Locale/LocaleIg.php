<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageIg;

/**
 * Class LocaleIg - Igbo
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleIg extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Asụsụ Igbo';
    }

    public function endonymSortable()
    {
        return 'ASUSU IGBO';
    }

    public function language()
    {
        return new LanguageIg();
    }
}
