<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguagePcm;

/**
 * Class LocalePcm - Nigerian Pidgin
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocalePcm extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Naijíriá Píjin';
    }

    public function endonymSortable(): string
    {
        return 'NAIJÍRIÁ PÍJIN';
    }

    public function language(): LanguageInterface
    {
        return new LanguagePcm();
    }
}
