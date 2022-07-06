<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageNn;

/**
 * Class LocaleNn - Norwegian Nynorsk
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleNn extends AbstractLocale implements LocaleInterface
{
    public function collation()
    {
        return 'danish_ci';
    }

    public function endonym()
    {
        return 'nynorsk';
    }

    public function endonymSortable()
    {
        return 'NYNORSK';
    }

    public function language()
    {
        return new LanguageNn();
    }

    public function numberSymbols()
    {
        return array(
            self::GROUP    => self::NBSP,
            self::DECIMAL  => self::COMMA,
            self::NEGATIVE => self::MINUS_SIGN,
        );
    }

    protected function percentFormat()
    {
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }
}
