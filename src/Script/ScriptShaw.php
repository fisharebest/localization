<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptShaw - Representation of the Shavian (Shaw) script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptShaw extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Shaw';
    }

    public function number(): string
    {
        return '281';
    }

    public function unicodeName(): ?string
    {
        return 'Shavian';
    }
}
