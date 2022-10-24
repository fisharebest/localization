<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Territory\TerritoryEt;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LanguageAa - Representation of the Afar language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageAa extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'aa';
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryEt();
    }
}
