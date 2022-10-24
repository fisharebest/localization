<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Territory\TerritoryInterface;
use Fisharebest\Localization\Territory\TerritoryKe;

/**
 * Class LanguageLuy - Representation of the Luyia language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageLuy extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'luy';
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryKe();
    }
}
