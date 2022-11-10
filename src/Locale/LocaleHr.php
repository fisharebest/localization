<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageHr;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleHr - Croatian
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleHr extends AbstractLocale implements LocaleInterface
{
    public function collation(): string
    {
        return 'croatian_ci';
    }

    public function endonym(): string
    {
        return 'hrvatski';
    }

    public function endonymSortable(): string
    {
        return 'HRVATSKI';
    }

    public function language(): LanguageInterface
    {
        return new LanguageHr();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP    => self::DOT,
            self::DECIMAL  => self::COMMA,
            self::NEGATIVE => self::MINUS_SIGN,
        ];
    }

    /**
     * How to format a floating point number (%s) as a percentage.
     *
     * @return string
     */
    protected function percentFormat(): string
    {
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }
}
