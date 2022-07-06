<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptDsrt - Representation of the Deseret (Mormon) script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class ScriptDsrt extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Dsrt';
    }

    public function number()
    {
        return '250';
    }

    public function unicodeName()
    {
        return 'Deseret';
    }
}
