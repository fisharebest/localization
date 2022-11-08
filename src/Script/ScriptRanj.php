<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptRanj - Representation of the Ranjana script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptRanj extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Ranj';
    }

    public function number(): string
    {
        return '303';
    }
}
