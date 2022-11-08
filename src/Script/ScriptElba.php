<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptElba - Representation of the Elbasan script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptElba extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Elba';
    }

    public function number(): string
    {
        return '226';
    }

    public function unicodeName(): ?string
    {
        return 'Elbasan';
    }
}
