<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptDupl - Representation of the Duployan shorthand, Duployan stenography script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptDupl extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Dupl';
    }

    public function number(): string
    {
        return '755';
    }

    public function unicodeName(): ?string
    {
        return 'Duployan';
    }
}
