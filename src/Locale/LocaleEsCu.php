<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryCu;

/**
 * Class LocaleEsCu
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleEsCu extends LocaleEs
{
    public function territory()
    {
        return new TerritoryCu();
    }
}
