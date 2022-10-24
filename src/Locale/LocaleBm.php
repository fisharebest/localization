<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageBm;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleBm - Bambara
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleBm extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'bamanakan';
    }

    public function endonymSortable(): string
    {
        return 'BAMANAKAN';
    }

    public function language(): LanguageInterface
    {
        return new LanguageBm();
    }
}
