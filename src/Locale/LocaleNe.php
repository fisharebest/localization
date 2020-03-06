<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageNe;

/**
 * Class LocaleNe - Nepali
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
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
