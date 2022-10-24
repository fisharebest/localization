<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryCr;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LocaleEsCr
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleEsCr extends LocaleEs
{
    public function numberSymbols(): array
    {
        return array(
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        );
    }

    public function territory(): TerritoryInterface
    {
        return new TerritoryCr();
    }
}
