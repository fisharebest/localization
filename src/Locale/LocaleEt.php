<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageEt;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleEt - Estonian
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleEt extends AbstractLocale implements LocaleInterface
{
    public function collation(): string
    {
        return 'estonian_ci';
    }

    public function endonym(): string
    {
        return 'eesti';
    }

    public function endonymSortable(): string
    {
        return 'EESTI';
    }

    public function language(): LanguageInterface
    {
        return new LanguageEt();
    }

    protected function minimumGroupingDigits(): int
    {
        return 3;
    }

    public function numberSymbols(): array
    {
        return array(
            self::GROUP    => self::NBSP,
            self::DECIMAL  => self::COMMA,
            self::NEGATIVE => self::MINUS_SIGN,
        );
    }
}
