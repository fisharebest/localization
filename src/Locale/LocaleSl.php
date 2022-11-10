<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageSl;

/**
 * Class LocaleSl - Slovenian
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleSl extends AbstractLocale implements LocaleInterface
{
    public function collation(): string
    {
        return 'slovenian_ci';
    }

    public function endonym(): string
    {
        return 'slovenščina';
    }

    public function endonymSortable(): string
    {
        return 'SLOVENSCINA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageSl();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP    => self::DOT,
            self::DECIMAL  => self::COMMA,
            self::NEGATIVE => self::MINUS_SIGN,
        ];
    }

    public function percentFormat(): string
    {
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }
}
