<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageIo;

/**
 * Class LocaleIo - Ido
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleIo extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Ido';
    }

    public function endonymSortable()
    {
        return 'IDO';
    }

    public function language()
    {
        return new LanguageIo();
    }
}
