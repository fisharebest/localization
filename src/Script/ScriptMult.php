<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptMult - Representation of the  Multani script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptMult extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Mult';
    }

    public function number(): string
    {
        return '323';
    }

    public function unicodeName(): ?string
    {
        return 'Multani';
    }
}
