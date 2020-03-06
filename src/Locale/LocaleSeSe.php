<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritorySe;

/**
 * Class LocaleSeSe
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleSeSe extends LocaleSe
{
    public function territory()
    {
        return new TerritorySe();
    }
}
