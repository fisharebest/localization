<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptOgam - Representation of the Ogham script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class ScriptOgam extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Ogam';
    }

    public function number()
    {
        return '212';
    }

    public function unicodeName()
    {
        return 'Ogham';
    }
}
