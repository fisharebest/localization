<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptVisp - Representation of the Visible Speech script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class ScriptVisp extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Visp';
    }

    public function number()
    {
        return '280';
    }
}
