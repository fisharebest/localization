<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptZanb - Representation of the Zanabazar Square script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptZanb extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Zanb';
    }

    public function number(): string
    {
        return '339';
    }

    public function unicodeName(): ?string
    {
        return 'Zanabazar_Square';
    }
}
