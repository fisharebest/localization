<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageSv;

/**
 * Class LocaleSv - Swedish
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleSv extends AbstractLocale implements LocaleInterface
{
    public function collation(): string
    {
        return 'swedish_ci';
    }

    public function endonym(): string
    {
        return 'svenska';
    }

    public function endonymSortable(): string
    {
        return 'SVENSKA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageSv();
    }

    public function numberSymbols(): array
    {
        return array(
            self::GROUP    => self::NBSP,
            self::DECIMAL  => self::COMMA,
            self::NEGATIVE => self::MINUS_SIGN,
        );
    }

    protected function percentFormat(): string
    {
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }
}
