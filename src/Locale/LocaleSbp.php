<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageSbp;

/**
 * Class LocaleSbp - Sangu
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleSbp extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Ishisangu';
    }

    public function endonymSortable(): string
    {
        return 'ISHISANGU';
    }

    public function language(): LanguageInterface
    {
        return new LanguageSbp();
    }
}
