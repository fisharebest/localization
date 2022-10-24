<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageFil;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleFil - Filipino
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleFil extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Filipino';
    }

    public function endonymSortable(): string
    {
        return 'FILIPINO';
    }

    public function language(): LanguageInterface
    {
        return new LanguageFil();
    }
}
