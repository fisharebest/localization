<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptPrti - Representation of the Inscriptional Parthian script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptPrti extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Prti';
    }

    public function number(): string
    {
        return '130';
    }

    public function unicodeName(): ?string
    {
        return 'Inscriptional_Parthian';
    }
}
