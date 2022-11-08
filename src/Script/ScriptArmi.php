<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptArmi - Representation of the Imperial Aramaic script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptArmi extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Armi';
    }

    public function number(): string
    {
        return '124';
    }

    public function unicodeName(): ?string
    {
        return 'Imperial_Aramaic';
    }
}
