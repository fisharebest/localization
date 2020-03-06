<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryXk;

/**
 * Class LocaleSrCyrlXk
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleSrCyrlXk extends LocaleSrCyrl
{
    public function territory()
    {
        return new TerritoryXk();
    }
}
