<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptInds - Representation of the Indus (Harappan) script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptInds extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Inds';
    }

    public function number(): string
    {
        return '610';
    }
}
