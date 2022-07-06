<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptOsge - Representation of the Osage script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class ScriptOsge extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Osge';
    }

    public function number()
    {
        return '219';
    }

    public function unicodeName()
    {
        return 'Osage';
    }
}
