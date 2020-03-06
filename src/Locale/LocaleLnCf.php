<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryCf;

/**
 * Class LocaleLnCf
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleLnCf extends LocaleLn
{
    public function territory()
    {
        return new TerritoryCf();
    }
}
