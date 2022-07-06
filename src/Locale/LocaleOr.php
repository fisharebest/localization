<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageOr;

/**
 * Class LocaleOr - Oriya
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleOr extends AbstractLocale implements LocaleInterface
{
    protected function digitsGroup()
    {
        return 2;
    }

    public function endonym()
    {
        return 'ଓଡ଼ିଆ';
    }

    public function language()
    {
        return new LanguageOr();
    }
}
