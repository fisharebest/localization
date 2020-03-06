<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptAdlm - Representation of the Adlam script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class ScriptAdlm extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Adlm';
    }

    public function number()
    {
        return '166';
    }

    public function unicodeName()
    {
        return 'Adlam';
    }
}
