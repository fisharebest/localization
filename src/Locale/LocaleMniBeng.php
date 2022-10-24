<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Script\ScriptBeng;
use Fisharebest\Localization\Script\ScriptInterface;

/**
 * Class LocaleMniBeng - Bengali
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleMniBeng extends LocaleMni
{
    public function script(): ScriptInterface
    {
        return new ScriptBeng();
    }
}
