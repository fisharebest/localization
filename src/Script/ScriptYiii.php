<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptYiii - Representation of the Yi script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptYiii extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Yiii';
    }

    public function number(): string
    {
        return '460';
    }

    public function unicodeName(): ?string
    {
        return 'Yi';
    }
}
