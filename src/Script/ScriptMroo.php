<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptMroo - Representation of the Mro, Mru script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptMroo extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Mroo';
    }

    public function number(): string
    {
        return '264';
    }

    public function unicodeName(): ?string
    {
        return 'Mro';
    }
}
