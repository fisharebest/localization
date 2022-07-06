<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryCv;

/**
 * Class LocalePtCv
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocalePtCv extends LocalePt
{
    public function territory()
    {
        return new TerritoryCv();
    }
}
