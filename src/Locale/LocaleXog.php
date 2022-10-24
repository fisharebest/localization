<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageXog;

/**
 * Class LocaleXog - Soga
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleXog extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Olusoga';
    }

    public function endonymSortable(): string
    {
        return 'OLUSOGA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageXog();
    }
}
