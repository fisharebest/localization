<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageRo;

/**
 * Class LocaleRo - Romanian
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleRo extends AbstractLocale implements LocaleInterface
{
    public function collation(): string
    {
        return 'romanian_ci';
    }

    public function endonym(): string
    {
        return 'română';
    }

    public function endonymSortable(): string
    {
        return 'ROMANA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageRo();
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
