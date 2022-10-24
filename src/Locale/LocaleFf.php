<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageFf;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleFf - Fulah
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleFf extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Pulaar';
    }

    public function endonymSortable(): string
    {
        return 'PULAAR';
    }

    public function language(): LanguageInterface
    {
        return new LanguageFf();
    }

    public function numberSymbols(): array
    {
        return array(
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        );
    }
}
