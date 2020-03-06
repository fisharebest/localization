<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryLk;

/**
 * Class LocaleTaLk
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleTaLk extends LocaleTa
{
    public function territory()
    {
        return new TerritoryLk();
    }
}
