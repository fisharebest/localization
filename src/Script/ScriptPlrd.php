<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptPlrd - Representation of the Miao (Pollard) script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptPlrd extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Plrd';
    }

    public function number(): string
    {
        return '282';
    }

    public function unicodeName(): ?string
    {
        return 'Miao';
    }
}
