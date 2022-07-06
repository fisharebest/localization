<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptCpmn - Representation of the Masaram Gondi script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class ScriptGonm extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Gonm';
    }

    public function number()
    {
        return '313';
    }

    public function unicodeName()
    {
        return 'Masaram_Gondi';
    }
}
