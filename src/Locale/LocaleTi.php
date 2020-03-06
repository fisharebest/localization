<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageTi;

/**
 * Class LocaleTi - Tigrinya
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleTi extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'ትግርኛ';
    }

    public function language()
    {
        return new LanguageTi();
    }
}
