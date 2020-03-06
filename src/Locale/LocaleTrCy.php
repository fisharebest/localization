<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryCy;

/**
 * Class LocaleTrCy
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleTrCy extends LocaleTr
{
    public function territory()
    {
        return new TerritoryCy();
    }
}
