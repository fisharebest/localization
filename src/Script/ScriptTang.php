<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptTang - Representation of the Tangut script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptTang extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Tang';
    }

    public function number(): string
    {
        return '520';
    }

    public function unicodeName(): ?string
    {
        return 'Tangut';
    }
}
