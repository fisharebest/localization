<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptBass - Representation of the Bassa Vah script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptBass extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Bass';
    }

    public function number(): string
    {
        return '259';
    }

    public function unicodeName(): ?string
    {
        return 'Bassa_Vah';
    }
}
