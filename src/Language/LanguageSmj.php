<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\PluralRule\PluralRuleOneTwoOther;
use Fisharebest\Localization\Territory\TerritoryInterface;
use Fisharebest\Localization\Territory\TerritorySe;

/**
 * Class LanguageSmj - Representation of the Lule Sami language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageSmj extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'smj';
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritorySe();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRuleOneTwoOther();
    }
}
