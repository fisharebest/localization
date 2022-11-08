<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptSinh - Representation of the Sinhala script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptSinh extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Sinh';
    }

    public function number(): string
    {
        return '348';
    }

    public function unicodeName(): ?string
    {
        return 'Sinhala';
    }
}
