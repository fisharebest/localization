<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptHang - Representation of the Hangul script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class ScriptHang extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Hang';
    }

    public function number()
    {
        return '286';
    }

    public function unicodeName()
    {
        return 'Hangul';
    }
}
