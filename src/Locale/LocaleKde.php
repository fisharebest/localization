<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageKde;

/**
 * Class LocaleKde - Makonde
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleKde extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Chimakonde';
    }

    public function endonymSortable()
    {
        return 'CHIMAKONDE';
    }

    public function language()
    {
        return new LanguageKde();
    }
}
