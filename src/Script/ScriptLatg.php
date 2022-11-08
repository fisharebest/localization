<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptLatg - Representation of the Latin (Gaelic variant) script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptLatg extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Latg';
    }

    public function number(): string
    {
        return '216';
    }
}
