<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageCs;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleCs - Czech
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleCs extends AbstractLocale implements LocaleInterface
{
    public function collation(): string
    {
        return 'czech_ci';
    }

    public function endonym(): string
    {
        return 'čeština';
    }

    public function endonymSortable(): string
    {
        return 'CESTINA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageCs();
    }

    public function numberSymbols(): array
    {
        return array(
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        );
    }

    protected function percentFormat(): string
    {
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }
}
