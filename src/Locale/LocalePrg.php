<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguagePrg;

/**
 * Class LocalePrg - Old Prussian
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocalePrg extends AbstractLocale implements LocaleInterface
{
    public function collation(): string
    {
        return 'latvian_ci';
    }

    public function endonym(): string
    {
        return 'prūsiskan';
    }

    public function endonymSortable(): string
    {
        return 'PRŪSISKAN';
    }

    public function language(): LanguageInterface
    {
        return new LanguagePrg();
    }

    protected function minimumGroupingDigits(): int
    {
        return 3;
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }
}
