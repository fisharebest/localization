<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptElba - Representation of the Elbasan script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class ScriptElba extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Elba';
    }

    public function number()
    {
        return '226';
    }

    public function unicodeName()
    {
        return 'Elbasan';
    }
}
