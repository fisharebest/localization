<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryBo;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LocaleEsBo
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleEsBo extends LocaleEs
{
    public function territory(): TerritoryInterface
    {
        return new TerritoryBo();
    }
}
