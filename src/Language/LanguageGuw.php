<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Territory\TerritoryBj;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LanguageGuw - Representation of the Gun language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageGuw extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'guw';
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryBj();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule2();
    }
}
