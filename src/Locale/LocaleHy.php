<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageHy;

/**
 * Class LocaleHy - Armenian
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleHy extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'հայերեն';
    }

    public function endonymSortable()
    {
        return 'ՀԱՅԵՐԵՆ';
    }

    public function language()
    {
        return new LanguageHy();
    }

    public function numberSymbols()
    {
        return array(
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        );
    }
}
