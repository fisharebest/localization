<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageGuw;

/**
 * Class LocaleFrBj
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleGuw extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Gun';
    }

    public function endonymSortable()
    {
        return 'GUN';
    }

    public function language()
    {
        return new LanguageGuw();
    }
}
