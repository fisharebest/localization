<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptSyrc - Representation of the Shuishu script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class ScriptShui extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Shui';
    }

    public function number()
    {
        return '530';
    }
}
