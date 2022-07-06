<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptKhar - Representation of the Kharoshthi script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class ScriptKhar extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Khar';
    }

    public function number()
    {
        return '305';
    }

    public function unicodeName()
    {
        return 'Kharoshthi';
    }
}
