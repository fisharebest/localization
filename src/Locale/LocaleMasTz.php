<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryTz;

/**
 * Class LocaleMasTz
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleMasTz extends LocaleMas
{
    public function territory()
    {
        return new TerritoryTz();
    }
}
