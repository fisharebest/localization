<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageKo;

/**
 * Class LocaleKo - Korean
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleKo extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return '한국어';
    }

    public function language()
    {
        return new LanguageKo();
    }
}
