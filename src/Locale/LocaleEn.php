<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageEn;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleEn - English
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleEn extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'English';
    }

    public function endonymSortable(): string
    {
        return 'ENGLISH';
    }

    public function language(): LanguageInterface
    {
        return new LanguageEn();
    }
}
