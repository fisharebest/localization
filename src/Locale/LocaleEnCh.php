<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryCh;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LocaleEnCh
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleEnCh extends LocaleEn
{
    public function numberSymbols(): array
    {
        return array(
            self::GROUP => self::APOSTROPHE,
        );
    }

    public function territory(): TerritoryInterface
    {
        return new TerritoryCh();
    }
}
