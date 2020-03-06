<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptJamo - Representation of the Jamo script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class ScriptJamo extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Jamo';
    }

    public function number()
    {
        return '284';
    }
}
