<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageGuw;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleGuw
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleGuw extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Gun';
    }

    public function endonymSortable(): string
    {
        return 'GUN';
    }

    public function language(): LanguageInterface
    {
        return new LanguageGuw();
    }
}
