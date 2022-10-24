<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Script\ScriptInterface;
use Fisharebest\Localization\Script\ScriptLatn;

/**
 * Class LocaleJvLatn - Javanese
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleJvLatn extends LocaleJv
{
    public function endonym(): string
    {
        return 'Basa Jawa';
    }

    public function endonymSortable(): string
    {
        return 'BASA JAWA';
    }

    public function script(): ScriptInterface
    {
        return new ScriptLatn();
    }
}
