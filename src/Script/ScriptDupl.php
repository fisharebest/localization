<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptDupl - Representation of the Duployan shorthand, Duployan stenography script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class ScriptDupl extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Dupl';
    }

    public function number()
    {
        return '755';
    }

    public function unicodeName()
    {
        return 'Duployan';
    }
}
