<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageKsf;

/**
 * Class LocaleKsf - Bafia
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleKsf extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'rikpa';
    }

    public function endonymSortable(): string
    {
        return 'RIKPA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageKsf();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }
}
