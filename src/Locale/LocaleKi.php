<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageKi;

/**
 * Class LocaleKi - Kikuyu
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleKi extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Gikuyu';
    }

    public function endonymSortable()
    {
        return 'GIKUYU';
    }

    public function language()
    {
        return new LanguageKi();
    }
}
