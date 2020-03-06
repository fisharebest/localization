<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptAran - Representation of the Arabic (Nastaliq) script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class ScriptAran extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Aran';
    }

    public function number()
    {
        return '161';
    }
}
