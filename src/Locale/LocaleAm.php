<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageAm;

/**
 * Class LocaleAm - Amharic
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleAm extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'አማርኛ';
    }

    public function language()
    {
        return new LanguageAm();
    }
}
