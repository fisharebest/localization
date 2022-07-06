<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryCo;

/**
 * Class LocaleEsCo
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleEsCo extends LocaleEs
{
    public function territory()
    {
        return new TerritoryCo();
    }
}
