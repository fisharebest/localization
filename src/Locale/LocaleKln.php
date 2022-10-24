<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageKln;

/**
 * Class LocaleKln - Kalenjin
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleKln extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Kalenjin';
    }

    public function endonymSortable(): string
    {
        return 'KALENJIN';
    }

    public function language(): LanguageInterface
    {
        return new LanguageKln();
    }
}
