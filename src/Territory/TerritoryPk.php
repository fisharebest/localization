<?php

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory PK - Pakistan.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class TerritoryPk extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'PK';
    }

    public function firstDay()
    {
        return 0;
    }
}
