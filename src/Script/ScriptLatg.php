<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptLatg - Representation of the Latin (Gaelic variant) script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class ScriptLatg extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Latg';
    }

    public function number()
    {
        return '216';
    }
}
