<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptGrek - Representation of the Greek script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptGrek extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Grek';
    }

    public function number(): string
    {
        return '200';
    }

    public function unicodeName(): ?string
    {
        return 'Greek';
    }
}
