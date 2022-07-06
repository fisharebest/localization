<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptEthi - Representation of the Ethiopic script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class ScriptEthi extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Ethi';
    }

    public function number()
    {
        return '430';
    }

    public function unicodeName()
    {
        return 'Ethiopic';
    }
}
