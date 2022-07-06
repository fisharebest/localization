<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageSt;

/**
 * Class LocaleSt
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleSt extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Sesotho';
    }

    public function endonymSortable()
    {
        return 'SESOTHO';
    }

    public function language()
    {
        return new LanguageSt();
    }
}
