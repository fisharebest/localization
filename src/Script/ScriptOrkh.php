<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptOrkh - Representation of the Old Turkic, Orkhon Runic script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class ScriptOrkh extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Orkh';
    }

    public function number()
    {
        return '175';
    }

    public function unicodeName()
    {
        return 'Old_Turkic';
    }
}
