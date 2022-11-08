<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptHano - Representation of the Hanunoo (Hanunóo) script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptHano extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Hano';
    }

    public function number(): string
    {
        return '371';
    }

    public function unicodeName(): ?string
    {
        return 'Hanunoo';
    }
}
