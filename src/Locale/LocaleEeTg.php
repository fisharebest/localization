<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryTg;

/**
 * Class LocaleEeTg
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleEeTg extends LocaleEe
{
    public function territory()
    {
        return new TerritoryTg();
    }
}
