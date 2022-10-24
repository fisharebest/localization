<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Script\ScriptInterface;
use Fisharebest\Localization\Script\ScriptLatn;

/**
 * Class LocaleSrLatn
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleSrLatn extends LocaleSr
{
    public function endonym(): string
    {
        return 'srpski';
    }

    public function endonymSortable(): string
    {
        return 'SRPSKI';
    }

    public function script(): ScriptInterface
    {
        return new ScriptLatn();
    }
}
