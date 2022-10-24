<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Territory\TerritoryInterface;
use Fisharebest\Localization\Territory\TerritoryKe;

/**
 * Class LanguageGuz - Representation of the Gusii language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageGuz extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'guz';
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryKe();
    }
}
