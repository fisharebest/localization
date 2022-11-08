<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptLeke - Representation of the Leke script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptLeke extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Leke';
    }

    public function number(): string
    {
        return '364';
    }
}
