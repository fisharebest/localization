<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptShui - Representation of the Shuishu script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptShui extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Shui';
    }

    public function number(): string
    {
        return '530';
    }
}
