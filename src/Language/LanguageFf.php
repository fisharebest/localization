<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Territory\TerritoryInterface;
use Fisharebest\Localization\Territory\TerritorySn;

/**
 * Class LanguageFf - Representation of the Fulah language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageFf extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'ff';
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritorySn();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule2();
    }
}
