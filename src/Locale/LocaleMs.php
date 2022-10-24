<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageMs;

/**
 * Class LocaleMs - Malay
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleMs extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Melayu';
    }

    public function endonymSortable(): string
    {
        return 'MELAYU';
    }

    public function language(): LanguageInterface
    {
        return new LanguageMs();
    }
}
