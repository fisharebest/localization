<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptBatk - Representation of the Batak script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptBatk extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Batk';
    }

    public function number(): string
    {
        return '365';
    }

    public function unicodeName(): ?string
    {
        return 'Batak';
    }
}
