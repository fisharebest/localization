<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptShaw - Representation of the Shavian (Shaw) script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class ScriptShaw extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Shaw';
    }

    public function number()
    {
        return '281';
    }

    public function unicodeName()
    {
        return 'Shavian';
    }
}
