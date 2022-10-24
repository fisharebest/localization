<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Script\ScriptDeva;
use Fisharebest\Localization\Script\ScriptInterface;

/**
 * Class LocaleKsDeva - Kashmiri
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleKsDeva extends LocaleKs
{
    public function direction(): string
    {
        return 'rtl';
    }

    public function endonym(): string
    {
        return 'कॉशुर';
    }

    public function script(): ScriptInterface
    {
        return new ScriptDeva();
    }
}
