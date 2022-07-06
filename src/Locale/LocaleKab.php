<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageKab;

/**
 * Class LocaleKab - Kabyle
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleKab extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Taqbaylit';
    }

    public function endonymSortable()
    {
        return 'TAQBAYLIT';
    }

    public function language()
    {
        return new LanguageKab();
    }

    public function numberSymbols()
    {
        return array(
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        );
    }
}
