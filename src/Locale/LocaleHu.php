<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageHu;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleHu - Hungarian
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleHu extends AbstractLocale implements LocaleInterface
{
    public function collation(): string
    {
        return 'hungarian_ci';
    }

    public function endonym(): string
    {
        return 'magyar';
    }

    public function endonymSortable(): string
    {
        return 'MAGYAR';
    }

    public function language(): LanguageInterface
    {
        return new LanguageHu();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }
}
