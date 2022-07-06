<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptSyrn - Representation of the Syriac (Eastern variant) script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class ScriptSyrn extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Syrn';
    }

    public function number()
    {
        return '136';
    }
}
