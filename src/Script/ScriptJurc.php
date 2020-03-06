<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptJurc - Representation of the Jurchen script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class ScriptJurc extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Jurc';
    }

    public function number()
    {
        return '510';
    }
}
