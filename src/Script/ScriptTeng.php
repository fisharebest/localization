<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptTeng - Representation of the Tengwar script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class ScriptTeng extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Teng';
    }

    public function number()
    {
        return '290';
    }
}
