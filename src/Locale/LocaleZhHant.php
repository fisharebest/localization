<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Script\ScriptHant;
use Fisharebest\Localization\Script\ScriptInterface;

/**
 * Class LocaleZhHant - Traditional Chinese
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleZhHant extends LocaleZh
{
    public function endonym(): string
    {
        return '繁體中文';
    }

    protected function minimumGroupingDigits(): int
    {
        return 3;
    }

    public function script(): ScriptInterface
    {
        return new ScriptHant();
    }
}
