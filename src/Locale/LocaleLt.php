<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageLt;

/**
 * Class LocaleLt - Lithuanian
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleLt extends AbstractLocale implements LocaleInterface
{
    public function collation(): string
    {
        return 'lithuanian_ci';
    }

    public function endonym(): string
    {
        return 'lietuvių';
    }

    public function endonymSortable(): string
    {
        return 'LIETUVIU';
    }

    public function language(): LanguageInterface
    {
        return new LanguageLt();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP    => self::NBSP,
            self::DECIMAL  => self::COMMA,
            self::NEGATIVE => self::MINUS_SIGN,
        ];
    }

    protected function percentFormat(): string
    {
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }
}
