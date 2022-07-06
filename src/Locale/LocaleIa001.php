<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\Territory001;

/**
 * Class LocaleIaFr
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleIa001 extends LocaleIa
{
    public function territory()
    {
        return new Territory001();
    }
}
