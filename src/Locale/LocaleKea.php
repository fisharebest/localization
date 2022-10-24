<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageKea;

/**
 * Class LocaleKea - Kabuverdianu
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleKea extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'kabuverdianu';
    }

    public function endonymSortable(): string
    {
        return 'KABUVERDIANU';
    }

    public function language(): LanguageInterface
    {
        return new LanguageKea();
    }

    public function numberSymbols(): array
    {
        return array(
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        );
    }
}
