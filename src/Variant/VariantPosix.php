<?php

namespace Fisharebest\Localization\Variant;

/**
 * Class Posix - Representation of the Posix variant of en-US.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class VariantPosix implements VariantInterface
{
    public function code()
    {
        return 'posix';
    }
}
