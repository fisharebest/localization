<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptBamu - Representation of the Bamum script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptBamu extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Bamu';
    }

    public function number(): string
    {
        return '435';
    }

    public function unicodeName(): ?string
    {
        return 'Bamum';
    }
}
