<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Territory\TerritoryBi;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LanguageRn - Representation of the Rundi language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageRn extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'rn';
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryBi();
    }
}
