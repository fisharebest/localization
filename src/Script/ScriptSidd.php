<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptSidd - Representation of the Siddham, Siddhaṃ, Siddhamātṛkā script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class ScriptSidd extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Sidd';
    }

    public function number()
    {
        return '302';
    }

    public function unicodeName()
    {
        return 'Siddham';
    }
}
