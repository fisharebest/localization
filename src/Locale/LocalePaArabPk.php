<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryPk;

/**
 * Class LocalePaArabPk
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocalePaArabPk extends LocalePaArab
{
    public function territory()
    {
        return new TerritoryPk();
    }
}
