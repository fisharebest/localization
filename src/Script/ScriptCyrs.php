<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptCyrs - Representation of the Cyrillic (Old Church Slavonic variant) script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class ScriptCyrs extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Cyrs';
    }

    public function number()
    {
        return '221';
    }
}
