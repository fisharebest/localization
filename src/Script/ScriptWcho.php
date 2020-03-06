<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptWara - Representation of the Wancho script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class ScriptWcho extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Wcho';
    }

    public function number()
    {
        return '283';
    }

    public function unicodeName()
    {
        return 'Wancho';
    }
}
