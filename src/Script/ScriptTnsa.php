<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptTnsa - Representation of the Tangsa script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptTnsa extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Tnsa';
    }

    public function number(): string
    {
        return '275';
    }

    public function unicodeName(): ?string
    {
        return 'Tangsa';
    }
}
