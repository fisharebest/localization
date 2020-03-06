<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageKok;

/**
 * Class LocaleKok - Konkani
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleKok extends AbstractLocale implements LocaleInterface
{
    protected function digitsGroup()
    {
        return 2;
    }

    public function endonym()
    {
        return 'कोंकणी';
    }

    public function language()
    {
        return new LanguageKok();
    }
}
