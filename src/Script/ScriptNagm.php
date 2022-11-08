<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptNagm - Representation of the Nag Mundari script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptNagm extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Nagm';
    }

    public function number(): string
    {
        return '295';
    }
}
