<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptZzzz - Representation of the Code for uncoded script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptZzzz extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Zzzz';
    }

    public function number(): string
    {
        return '999';
    }

    public function unicodeName(): ?string
    {
        return 'Unknown';
    }
}
