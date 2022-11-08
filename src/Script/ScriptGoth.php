<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptGoth - Representation of the Gothic script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptGoth extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Goth';
    }

    public function number(): string
    {
        return '206';
    }

    public function unicodeName(): ?string
    {
        return 'Gothic';
    }
}
