<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptPsin - Representation of the Proto-Sinaitic script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptPsin extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Psin';
    }

    public function number(): string
    {
        return '103';
    }
}
