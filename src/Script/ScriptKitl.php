<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptKitl - Representation of the Khitan large script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class ScriptKitl extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Kitl';
    }

    public function number()
    {
        return '505';
    }
}
