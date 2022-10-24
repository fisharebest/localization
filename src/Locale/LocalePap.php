<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguagePap;

/**
 * Class LocalePap - Papiamentu
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocalePap extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Papiamentu';
    }

    public function endonymSortable(): string
    {
        return 'PAPIAMENTU';
    }

    public function language(): LanguageInterface
    {
        return new LanguagePap();
    }
}
