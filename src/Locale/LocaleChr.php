<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageChr;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleChr - Cherokee
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleChr extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'ᏣᎳᎩ';
    }

    public function language(): LanguageInterface
    {
        return new LanguageChr();
    }
}
