<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageSt;

/**
 * Class LocaleSt
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleSt extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Sesotho';
    }

    public function endonymSortable(): string
    {
        return 'SESOTHO';
    }

    public function language(): LanguageInterface
    {
        return new LanguageSt();
    }
}
