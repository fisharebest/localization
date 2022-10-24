<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptMlym - Representation of the Malayalam script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptMlym extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Mlym';
    }

    public function numerals(): array
    {
        return array('൦', '൧', '൨', '൩', '൪', '൫', '൬', '൭', '൮', '൯');
    }

    public function number(): string
    {
        return '347';
    }

    public function unicodeName(): ?string
    {
        return 'Malayalam';
    }
}
