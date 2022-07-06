<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptMend - Representation of the Mende Kikakui script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class ScriptMend extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Mend';
    }

    public function number()
    {
        return '438';
    }

    public function unicodeName()
    {
        return 'Mende_Kikakui';
    }
}
