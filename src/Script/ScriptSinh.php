<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptSinh - Representation of the Sinhala script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class ScriptSinh extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Sinh';
    }

    public function number()
    {
        return '348';
    }

    public function unicodeName()
    {
        return 'Sinhala';
    }
}
