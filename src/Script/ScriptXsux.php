<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptXsux - Representation of the Cuneiform, Sumero-Akkadian script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class ScriptXsux extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Xsux';
    }

    public function number()
    {
        return '020';
    }

    public function unicodeName()
    {
        return 'Cuneiform';
    }
}
