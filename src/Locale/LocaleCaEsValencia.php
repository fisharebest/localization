<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Variant\VariantValencia;

/**
 * Class LocaleCaEsValencia
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleCaEsValencia extends LocaleCaEs
{
    public function variant()
    {
        return new VariantValencia();
    }
}
