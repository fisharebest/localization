<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Script\ScriptCyrl;
use Fisharebest\Localization\Script\ScriptInterface;

/**
 * Class LocaleBsCyrl
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleBsCyrl extends LocaleBs
{
    public function script(): ScriptInterface
    {
        return new ScriptCyrl();
    }

    protected function percentFormat(): string
    {
        return self::PLACEHOLDER . self::PERCENT;
    }
}
