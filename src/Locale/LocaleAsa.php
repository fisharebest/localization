<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageAsa;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleAsa - Asu
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleAsa extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Kipare';
    }

    public function endonymSortable(): string
    {
        return 'KIPARE';
    }

    public function language(): LanguageInterface
    {
        return new LanguageAsa();
    }
}
