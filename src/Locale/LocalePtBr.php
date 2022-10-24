<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Territory\TerritoryBr;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LocalePtBr - Brazilian Portuguese
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocalePtBr extends LocalePt
{
    public function endonym(): string
    {
        return 'português do Brasil';
    }

    public function endonymSortable(): string
    {
        return 'PORTUGUES DO BRASIL';
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule2();
    }

    public function territory(): TerritoryInterface
    {
        return new TerritoryBr();
    }
}
