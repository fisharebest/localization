<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptHano - Representation of the Hanunoo (Hanunóo) script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class ScriptHano extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Hano';
    }

    public function number()
    {
        return '371';
    }

    public function unicodeName()
    {
        return 'Hanunoo';
    }
}
