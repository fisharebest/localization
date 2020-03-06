<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptKits - Representation of the Khitan small script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class ScriptKits extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Kits';
    }

    public function number()
    {
        return '288';
    }
}
