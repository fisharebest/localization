<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageJgo;

/**
 * Class LocaleJgo - Ngomba
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleJgo extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Ndaꞌa';
    }

    public function endonymSortable(): string
    {
        return 'NDAA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageJgo();
    }

    public function numberSymbols(): array
    {
        return array(
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        );
    }
}
