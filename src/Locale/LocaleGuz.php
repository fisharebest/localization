<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageGuz;

/**
 * Class LocaleGuz - Gusii
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleGuz extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Ekegusii';
    }

    public function endonymSortable()
    {
        return 'EKEGUSII';
    }

    public function language()
    {
        return new LanguageGuz();
    }
}
