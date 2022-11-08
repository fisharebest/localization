<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptDsrt - Representation of the Deseret (Mormon) script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptDsrt extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Dsrt';
    }

    public function number(): string
    {
        return '250';
    }

    public function unicodeName(): ?string
    {
        return 'Deseret';
    }
}
