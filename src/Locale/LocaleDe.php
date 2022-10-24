<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageDe;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleDe - German
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleDe extends AbstractLocale implements LocaleInterface
{
    public function collation(): string
    {
        return 'german2_ci';
    }

    public function endonym(): string
    {
        return 'Deutsch';
    }

    public function endonymSortable(): string
    {
        return 'DEUTSCH';
    }

    public function language(): LanguageInterface
    {
        return new LanguageDe();
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
