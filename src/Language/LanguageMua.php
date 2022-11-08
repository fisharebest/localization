<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Territory\TerritoryCm;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LanguageMua - Representation of the Mundang language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageMua extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'mua';
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryCm();
    }
}
