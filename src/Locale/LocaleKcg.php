<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageKcg;

/**
 * Class LocaleKcg - Tyap
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleKcg extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Tyap';
    }

    public function endonymSortable(): string
    {
        return 'TYAP';
    }

    public function language(): LanguageInterface
    {
        return new LanguageKcg();
    }
}
