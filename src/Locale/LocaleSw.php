<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageSw;

/**
 * Class LocaleSw - Swahili
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleSw extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Kiswahili';
    }

    public function endonymSortable(): string
    {
        return 'KISWAHILI';
    }

    public function language(): LanguageInterface
    {
        return new LanguageSw();
    }
}
