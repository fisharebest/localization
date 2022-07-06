<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptBlis - Representation of the Blissymbols script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class ScriptBlis extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Blis';
    }

    public function number()
    {
        return '550';
    }
}
