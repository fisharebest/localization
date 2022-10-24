<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguagePis;

/**
 * Class LocalePis - Pijin
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocalePis extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Pijin';
    }

    public function endonymSortable(): string
    {
        return 'Pijin';
    }

    public function language(): LanguageInterface
    {
        return new LanguagePis();
    }
}
