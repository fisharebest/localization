<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Script\ScriptInterface;
use Fisharebest\Localization\Script\ScriptLatn;

/**
 * Class LocaleCeLatn - Chechen
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleCeLatn extends LocaleCe
{
    public function endonym(): string
    {
        return 'Chechen';
    }

    public function endonymSortable(): string
    {
        return 'CHECHEN';
    }

    public function script(): ScriptInterface
    {
        return new ScriptLatn();
    }
}
