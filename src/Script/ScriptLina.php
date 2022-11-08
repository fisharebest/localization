<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptLina - Representation of the Linear A script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptLina extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Lina';
    }

    public function number(): string
    {
        return '400';
    }

    public function unicodeName(): ?string
    {
        return 'Linear_A';
    }
}
