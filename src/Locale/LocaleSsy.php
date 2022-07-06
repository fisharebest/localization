<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageSsy;

/**
 * Class LocaleSsy - Saho
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleSsy extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Saho';
    }

    public function endonymSortable()
    {
        return 'SAHO';
    }

    public function language()
    {
        return new LanguageSsy();
    }
}
