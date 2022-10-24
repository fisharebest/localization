<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageDsb;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleDsb - Lower Sorbian
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleDsb extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'dolnoserbšćina';
    }

    public function endonymSortable(): string
    {
        return 'DOLNOSERBSCINA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageDsb();
    }

    public function numberSymbols(): array
    {
        return array(
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        );
    }

    protected function percentFormat(): string
    {
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }
}
