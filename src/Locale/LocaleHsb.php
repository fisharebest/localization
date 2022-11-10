<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageHsb;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleHsb - Upper Sorbian
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleHsb extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'hornjoserbšćina';
    }

    public function endonymSortable(): string
    {
        return 'HORNJOSERBSCINA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageHsb();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }

    protected function percentFormat(): string
    {
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }
}
