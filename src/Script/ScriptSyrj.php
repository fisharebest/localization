<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptSyrj - Representation of the Syriac (Western variant) script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class ScriptSyrj extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Syrj';
    }

    public function number()
    {
        return '137';
    }
}
