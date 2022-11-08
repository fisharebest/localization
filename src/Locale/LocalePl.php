<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguagePl;

/**
 * Class LocalePl - Polish
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocalePl extends AbstractLocale implements LocaleInterface
{
    public function collation(): string
    {
        return 'polish_ci';
    }

    public function endonym(): string
    {
        return 'polski';
    }

    public function endonymSortable(): string
    {
        return 'POLSKI';
    }

    public function language(): LanguageInterface
    {
        return new LanguagePl();
    }

    protected function minimumGroupingDigits(): int
    {
        return 2;
    }

    public function numberSymbols(): array
    {
        return array(
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        );
    }
}
