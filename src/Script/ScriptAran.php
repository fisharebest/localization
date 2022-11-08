<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptAran - Representation of the Arabic (Nastaliq) script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptAran extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Aran';
    }

    public function number(): string
    {
        return '161';
    }
}
