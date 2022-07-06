<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptMoon - Representation of the Moon (Moon code, Moon script, Moon type) script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class ScriptMoon extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Moon';
    }

    public function number()
    {
        return '218';
    }
}
