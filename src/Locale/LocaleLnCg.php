<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryCg;

/**
 * Class LocaleLnCg
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleLnCg extends LocaleLn
{
    public function territory()
    {
        return new TerritoryCg();
    }
}
