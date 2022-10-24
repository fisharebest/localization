<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageHaw;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleHaw - Hawaiian
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleHaw extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'ʻŌlelo Hawaiʻi';
    }

    public function endonymSortable(): string
    {
        return 'OLELO HAWAII';
    }

    public function language(): LanguageInterface
    {
        return new LanguageHaw();
    }
}
