<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptLatn - Representation of the Latin script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class ScriptLatn extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Latn';
    }

    public function number()
    {
        return '215';
    }

    public function unicodeName()
    {
        return 'Latin';
    }
}
