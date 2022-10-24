<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Territory\TerritoryInterface;
use Fisharebest\Localization\Territory\TerritoryKe;

/**
 * Class LanguageMer - Representation of the Meru language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageMer extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'mer';
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryKe();
    }
}
