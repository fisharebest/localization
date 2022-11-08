<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptOrkh - Representation of the Old Turkic, Orkhon Runic script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptOrkh extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Orkh';
    }

    public function number(): string
    {
        return '175';
    }

    public function unicodeName(): ?string
    {
        return 'Old_Turkic';
    }
}
