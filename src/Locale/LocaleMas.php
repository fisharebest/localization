<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageMas;

/**
 * Class LocaleMas - Masai
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleMas extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Maa';
    }

    public function endonymSortable()
    {
        return 'MAA';
    }

    public function language()
    {
        return new LanguageMas();
    }
}
