<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageSo;

/**
 * Class LocaleSo - Somali
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleSo extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Soomaali';
    }

    public function endonymSortable(): string
    {
        return 'SOOMAALI';
    }

    public function language(): LanguageInterface
    {
        return new LanguageSo();
    }
}
