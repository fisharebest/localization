<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageNe;

/**
 * Class LocaleNe - Nepali
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleNe extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'नेपाली';
    }

    public function language()
    {
        return new LanguageNe();
    }
}
