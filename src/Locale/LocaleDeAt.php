<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryAt;

/**
 * Class LocaleDeAt - Austrian German
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleDeAt extends LocaleDe
{
    public function endonym()
    {
        return 'Österreichisches Deutsch';
    }

    public function endonymSortable()
    {
        return 'OSTERREICHISCHES DEUTSCH';
    }

    public function numberSymbols()
    {
        return array(
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        );
    }

    public function territory()
    {
        return new TerritoryAt();
    }
}
