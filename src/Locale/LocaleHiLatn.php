<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Script\ScriptInterface;
use Fisharebest\Localization\Script\ScriptLatn;

/**
 * Class LocaleHiLatn - Hindi
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleHiLatn extends LocaleHi
{
    public function endonym(): string
    {
        return 'Hindi';
    }

    public function script(): ScriptInterface
    {
        return new ScriptLatn();
    }
}
