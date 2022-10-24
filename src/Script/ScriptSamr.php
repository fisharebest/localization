<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptSamr - Representation of the Samaritan script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptSamr extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Samr';
    }

    public function number(): string
    {
        return '123';
    }

    public function unicodeName(): ?string
    {
        return 'Samaritan';
    }
}
