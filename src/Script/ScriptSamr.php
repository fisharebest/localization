<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptSamr - Representation of the Samaritan script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class ScriptSamr extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Samr';
    }

    public function number()
    {
        return '123';
    }

    public function unicodeName()
    {
        return 'Samaritan';
    }
}
