<?php

namespace Fisharebest\Localization\Variant;

/**
 * Interface VariantInterface - Representation of a locale variant.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
interface VariantInterface
{
    /**
     * The code for this variant.
     *
     * @return string
     */
    public function code();
}
