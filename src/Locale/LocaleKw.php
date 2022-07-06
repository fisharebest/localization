<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageKw;

/**
 * Class LocaleKw - Cornish
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleKw extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'kernewek';
    }

    public function endonymSortable()
    {
        return 'KERNEWEK';
    }

    public function language()
    {
        return new LanguageKw();
    }
}
