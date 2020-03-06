<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageYi;

/**
 * Class LocaleYi - Yiddish
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleYi extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'ייִדיש';
    }

    public function language()
    {
        return new LanguageYi();
    }
}
