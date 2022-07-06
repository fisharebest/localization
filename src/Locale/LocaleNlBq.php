<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryBq;

/**
 * Class LocaleNlBq
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleNlBq extends LocaleNl
{
    public function territory()
    {
        return new TerritoryBq();
    }
}
