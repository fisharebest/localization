<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptPhlv - Representation of the Book Pahlavi script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class ScriptPhlv extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Phlv';
    }

    public function number()
    {
        return '133';
    }
}
