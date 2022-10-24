<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageGa;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleGa - Irish
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleGa extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Gaeilge';
    }

    public function endonymSortable(): string
    {
        return 'GAEILGE';
    }

    public function language(): LanguageInterface
    {
        return new LanguageGa();
    }
}
