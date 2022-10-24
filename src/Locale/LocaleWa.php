<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageWa;

/**
 * Class LocaleWa - Walloon
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleWa extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Walon';
    }

    public function endonymSortable(): string
    {
        return 'WALON';
    }

    public function language(): LanguageInterface
    {
        return new LanguageWa();
    }
}
