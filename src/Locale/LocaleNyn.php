<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageNyn;

/**
 * Class LocaleNyn - Nyankole
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleNyn extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Runyankore';
    }

    public function endonymSortable(): string
    {
        return 'RUNYANKORE';
    }

    public function language(): LanguageInterface
    {
        return new LanguageNyn();
    }
}
