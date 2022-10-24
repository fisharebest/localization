<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageFo;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleFo - Faroese
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleFo extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'føroyskt';
    }

    public function endonymSortable(): string
    {
        return 'FOROYSKT';
    }

    public function language(): LanguageInterface
    {
        return new LanguageFo();
    }

    public function numberSymbols(): array
    {
        return array(
            self::GROUP    => self::DOT,
            self::DECIMAL  => self::COMMA,
            self::NEGATIVE => self::MINUS_SIGN,
        );
    }

    protected function percentFormat(): string
    {
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }
}
