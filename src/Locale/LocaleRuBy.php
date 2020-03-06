<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryBy;

/**
 * Class LocaleRuBy
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleRuBy extends LocaleRu
{
    public function territory()
    {
        return new TerritoryBy();
    }
}
