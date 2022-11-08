<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptPauc - Representation of the Pau Cin Hau script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptPauc extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Pauc';
    }

    public function number(): string
    {
        return '263';
    }

    public function unicodeName(): ?string
    {
        return 'Pau_Cin_Hau';
    }
}
