<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageRm;

/**
 * Class LocaleRm - Romansh
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleRm extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'rumantsch';
    }

    public function endonymSortable(): string
    {
        return 'RUMANTSCH';
    }

    public function language(): LanguageInterface
    {
        return new LanguageRm();
    }

    public function numberSymbols(): array
    {
        return array(
            self::GROUP    => self::APOSTROPHE,
            self::NEGATIVE => self::MINUS_SIGN,
        );
    }

    protected function percentFormat(): string
    {
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }
}
