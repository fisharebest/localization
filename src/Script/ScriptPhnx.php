<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptPhnx - Representation of the Phoenician script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class ScriptPhnx extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Phnx';
    }

    public function number()
    {
        return '115';
    }

    public function unicodeName()
    {
        return 'Phoenician';
    }
}
