<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptPhli - Representation of the Inscriptional Pahlavi script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptPhli extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Phli';
    }

    public function number(): string
    {
        return '131';
    }

    public function unicodeName(): ?string
    {
        return 'Inscriptional_Pahlavi';
    }
}
