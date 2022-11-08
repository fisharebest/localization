<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptXsux - Representation of the Cuneiform, Sumero-Akkadian script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptXsux extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Xsux';
    }

    public function number(): string
    {
        return '020';
    }

    public function unicodeName(): ?string
    {
        return 'Cuneiform';
    }
}
