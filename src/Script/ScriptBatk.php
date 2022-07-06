<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptBatk - Representation of the Batak script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class ScriptBatk extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Batk';
    }

    public function number()
    {
        return '365';
    }

    public function unicodeName()
    {
        return 'Batak';
    }
}
