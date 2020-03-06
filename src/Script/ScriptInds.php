<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptInds - Representation of the Indus (Harappan) script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class ScriptInds extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Inds';
    }

    public function number()
    {
        return '610';
    }
}
