<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptJurc - Representation of the Jurchen script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptJurc extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Jurc';
    }

    public function number(): string
    {
        return '510';
    }
}
