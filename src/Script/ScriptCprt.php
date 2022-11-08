<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptCprt - Representation of the Cypriot script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptCprt extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Cprt';
    }

    public function number(): string
    {
        return '403';
    }

    public function unicodeName(): ?string
    {
        return 'Cypriot';
    }
}
