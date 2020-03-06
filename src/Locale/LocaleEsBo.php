<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryBo;

/**
 * Class LocaleEsBo
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleEsBo extends LocaleEs
{
    public function territory()
    {
        return new TerritoryBo();
    }
}
