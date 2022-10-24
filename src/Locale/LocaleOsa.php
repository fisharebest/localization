<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageOsa;
use Fisharebest\Localization\Territory\TerritoryInterface;
use Fisharebest\Localization\Territory\TerritoryUs;

/**
 * Class LocaleOsa - Osage
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleOsa extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Osage';
    }

    public function endonymSortable(): string
    {
        return 'OSAGE';
    }

    public function language(): LanguageInterface
    {
        return new LanguageOsa();
    }

    public function territory(): TerritoryInterface
    {
        return new TerritoryUS();
    }
}
