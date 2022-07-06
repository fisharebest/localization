<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptBuhd - Representation of the Buhid script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class ScriptBuhd extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Buhd';
    }

    public function number()
    {
        return '372';
    }

    public function unicodeName()
    {
        return 'Buhid';
    }
}
