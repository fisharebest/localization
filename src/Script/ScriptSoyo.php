<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptSyrc - Representation of the Soyombo script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class ScriptSoyo extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Soyo';
    }

    public function number()
    {
        return '329';
    }

    public function unicodeName()
    {
        return 'Soyombo';
    }
}
