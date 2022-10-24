<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptLinb - Representation of the Linear B script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptLinb extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Linb';
    }

    public function number(): string
    {
        return '401';
    }

    public function unicodeName(): ?string
    {
        return 'Linear_B';
    }
}
