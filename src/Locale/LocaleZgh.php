<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageZgh;

/**
 * Class LocaleZgh - Standard Moroccan Tamazight
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleZgh extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'ⵜⴰⵎⴰⵣⵉⵖⵜ';
    }

    public function language()
    {
        return new LanguageZgh();
    }

    public function numberSymbols()
    {
        return array(
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        );
    }

    protected function percentFormat()
    {
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }
}
