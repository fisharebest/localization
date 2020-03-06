<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryCa;

/**
 * Class LocaleFrCa - Canadian French
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleFrCa extends LocaleFr
{
    public function endonym()
    {
        return 'français canadien';
    }

    public function endonymSortable()
    {
        return 'FRANCAIS CANADIEN';
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
        return new TerritoryCa();
    }
}
