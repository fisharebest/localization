<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptCopt - Representation of the Coptic script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptCopt extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Copt';
    }

    public function number(): string
    {
        return '204';
    }

    public function unicodeName(): ?string
    {
        return 'Coptic';
    }
}
