<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptWara - Representation of the Warang Citi (Varang Kshiti) script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class ScriptWara extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Wara';
    }

    public function number()
    {
        return '262';
    }

    public function unicodeName()
    {
        return 'Warang_Citi';
    }
}
