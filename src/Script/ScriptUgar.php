<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptUgar - Representation of the Ugaritic script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptUgar extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Ugar';
    }

    public function number(): string
    {
        return '040';
    }

    public function unicodeName(): ?string
    {
        return 'Ugaritic';
    }
}
