<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguagePt;

/**
 * Class LocalePt - Portuguese
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocalePt extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'português';
    }

    public function endonymSortable()
    {
        return 'PORTUGUES';
    }

    public function language()
    {
        return new LanguagePt();
    }

    public function numberSymbols()
    {
        return array(
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        );
    }
}
