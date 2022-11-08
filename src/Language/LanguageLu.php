<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Territory\TerritoryCd;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LanguageLu - Representation of the Luba-Katanga language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageLu extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'lu';
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryCd();
    }
}
