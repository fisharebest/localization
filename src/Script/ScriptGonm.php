<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptGonm - Representation of the Masaram Gondi script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptGonm extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Gonm';
    }

    public function number(): string
    {
        return '313';
    }

    public function unicodeName(): ?string
    {
        return 'Masaram_Gondi';
    }
}
