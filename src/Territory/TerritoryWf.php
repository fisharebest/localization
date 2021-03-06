<?php

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory WF - Wallis and Futuna.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class TerritoryWf extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'WF';
    }
}
