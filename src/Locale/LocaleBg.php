<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageBg;

/**
 * Class LocaleBg - Bulgarian
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleBg extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'български';
    }

    public function endonymSortable()
    {
        return 'БЪЛГАРСКИ';
    }

    public function language()
    {
        return new LanguageBg();
    }

    protected function minimumGroupingDigits()
    {
        return 2;
    }

    public function numberSymbols()
    {
        return array(
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        );
    }
}
