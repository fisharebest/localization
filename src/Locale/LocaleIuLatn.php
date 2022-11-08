<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Script\ScriptInterface;
use Fisharebest\Localization\Script\ScriptLatn;

/**
 * Class LocaleIuLatn - Inuktitut
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleIuLatn extends LocaleIu
{
    public function endonym(): string
    {
        return 'Inuktitut';
    }

    public function endonymSortable(): string
    {
        return 'INUKTITUT';
    }

    public function script(): ScriptInterface
    {
        return new ScriptLatn();
    }
}
