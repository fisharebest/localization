<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageCy;

/**
 * Class LocaleCy - Welsh
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleCy extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Cymraeg';
    }

    public function endonymSortable()
    {
        return 'CYMRAEG';
    }

    public function language()
    {
        return new LanguageCy();
    }
}
