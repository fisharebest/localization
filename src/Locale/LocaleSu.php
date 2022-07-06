<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageSu;

/**
 * Class LocaleSu
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleSu extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'ᮘᮞ ᮞᮥᮔ᮪ᮓ';
    }

    public function language()
    {
        return new LanguageSu();
    }
}
