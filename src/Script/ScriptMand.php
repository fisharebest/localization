<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptMand - Representation of the Mandaic, Mandaean script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class ScriptMand extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Mand';
    }

    public function number()
    {
        return '140';
    }

    public function unicodeName()
    {
        return 'Mandaic';
    }
}
