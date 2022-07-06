<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageVai;

/**
 * Class LocaleVai - Vai
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleVai extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'ꕙꔤ';
    }

    public function language()
    {
        return new LanguageVai();
    }
}
