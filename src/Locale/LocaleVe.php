<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageVe;

/**
 * Class LocaleVe - Venda
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleVe extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Tshivenḓa';
    }

    public function endonymSortable(): string
    {
        return 'TSHIVENDA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageVe();
    }

    public function numberSymbols(): array
    {
        return array(
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        );
    }
}
