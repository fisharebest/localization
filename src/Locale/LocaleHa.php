<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageHa;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleHa - Hausa
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleHa extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Hausa';
    }

    public function endonymSortable(): string
    {
        return 'HAUSA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageHa();
    }
}
