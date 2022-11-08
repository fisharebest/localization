<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptTavt - Representation of the Tai Viet script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptTavt extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Tavt';
    }

    public function number(): string
    {
        return '359';
    }

    public function unicodeName(): ?string
    {
        return 'Tai_Viet';
    }
}
