<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptNshu - Representation of the Nüshu script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2024 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptNshu extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Nshu';
    }

    public function number(): string
    {
        return '499';
    }

    public function unicodeName(): ?string
    {
        return 'Nushu';
    }
}
