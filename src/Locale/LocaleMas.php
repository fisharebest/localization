<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageMas;

/**
 * Class LocaleMas - Masai
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleMas extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Maa';
    }

    public function endonymSortable(): string
    {
        return 'MAA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageMas();
    }
}
