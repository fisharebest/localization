<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageLb;

/**
 * Class LocaleLb - Luxembourgish
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleLb extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Lëtzebuergesch';
    }

    public function endonymSortable(): string
    {
        return 'LETZEBUERGESCH';
    }

    public function language(): LanguageInterface
    {
        return new LanguageLb();
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
