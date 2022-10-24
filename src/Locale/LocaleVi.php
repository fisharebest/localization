<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageVi;

/**
 * Class LocaleVi - Vietnamese
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleVi extends AbstractLocale implements LocaleInterface
{
    public function collation(): string
    {
        return 'vietnamese_ci';
    }

    public function endonym(): string
    {
        return 'Tiếng Việt';
    }

    public function endonymSortable(): string
    {
        return 'TIENG VIET';
    }

    public function language(): LanguageInterface
    {
        return new LanguageVi();
    }

    public function numberSymbols(): array
    {
        return array(
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        );
    }
}
