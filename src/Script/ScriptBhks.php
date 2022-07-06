<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptBhks - Representation of the Bhaiksuki script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class ScriptBhks extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Bhks';
    }

    public function number()
    {
        return '334';
    }

    public function unicodeName()
    {
        return 'Bhaiksuki';
    }
}
