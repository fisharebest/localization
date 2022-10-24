<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageSn;

/**
 * Class LocaleSn - Shona
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleSn extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'chiShona';
    }

    public function endonymSortable(): string
    {
        return 'CHISHONA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageSn();
    }
}
