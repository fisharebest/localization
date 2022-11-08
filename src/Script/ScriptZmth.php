<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptZmth - Representation of the Mathematical notation script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptZmth extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Zmth';
    }

    public function number(): string
    {
        return '995';
    }
}
