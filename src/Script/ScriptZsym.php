<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptZsym - Representation of the Symbols script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class ScriptZsym extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Zsym';
    }

    public function number()
    {
        return '996';
    }
}
