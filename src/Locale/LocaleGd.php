<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageGd;

/**
 * Class LocaleGd - Scottish Gaelic
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleGd extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Gàidhlig';
    }

    public function endonymSortable()
    {
        return 'GAIDHLIG';
    }

    public function language()
    {
        return new LanguageGd();
    }
}
