<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageTa;

/**
 * Class LocaleTa - Tamil
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleTa extends AbstractLocale implements LocaleInterface
{
    protected function digitsGroup()
    {
        return 2;
    }

    public function endonym()
    {
        return 'தமிழ்';
    }

    public function language()
    {
        return new LanguageTa();
    }
}
