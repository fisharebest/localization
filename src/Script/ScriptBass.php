<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptBass - Representation of the Bassa Vah script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class ScriptBass extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Bass';
    }

    public function number()
    {
        return '259';
    }

    public function unicodeName()
    {
        return 'Bassa_Vah';
    }
}
