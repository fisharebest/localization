<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Territory\TerritoryBr;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LanguageKgp - Representation of the Kaingang language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageKgp extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'kgp';
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryBr();
    }
}
