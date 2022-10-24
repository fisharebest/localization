<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Territory\TerritoryInterface;
use Fisharebest\Localization\Territory\TerritoryNe;

/**
 * Class LanguageTwq - Representation of the Tasawaq language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageTwq extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'twq';
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryNe();
    }
}
