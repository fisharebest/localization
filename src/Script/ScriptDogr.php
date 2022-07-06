<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptCpmn - Representation of the Dogra script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class ScriptDogr extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Dogr';
    }

    public function number()
    {
        return '328';
    }

    public function unicodeName()
    {
        return 'Dogra';
    }
}
