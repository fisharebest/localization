<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptRoro - Representation of the Rongorongo script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptRoro extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Roro';
    }

    public function number(): string
    {
        return '620';
    }
}
