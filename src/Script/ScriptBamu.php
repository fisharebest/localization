<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptBamu - Representation of the Bamum script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class ScriptBamu extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Bamu';
    }

    public function number()
    {
        return '435';
    }

    public function unicodeName()
    {
        return 'Bamum';
    }
}
