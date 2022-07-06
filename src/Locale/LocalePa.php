<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguagePa;

/**
 * Class LocalePa - Punjabi
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocalePa extends AbstractLocale implements LocaleInterface
{
    protected function digitsGroup()
    {
        return 2;
    }

    public function endonym()
    {
        return 'ਪੰਜਾਬੀ';
    }

    public function language()
    {
        return new LanguagePa();
    }
}
